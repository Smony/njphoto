<?php namespace System\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Cms\Classes\Theme;
use Cms\Classes\ThemeManager;
use System\Classes\UpdateManager;

class ThemeList extends Command
{
    /**
     * The console command name.
     */
    protected $name = 'theme:list';

    /**
     * The console command description.
     */
    protected $description = 'List available themes.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function fire()
    {
        $themeManager = ThemeManager::instance();
        $updateManager = UpdateManager::instance();

        foreach (Theme::all() as $theme) {
            $flag = $theme->isActiveTheme() ? '[*] ' : '[-] ';
            $themeId = $theme->getId();
            $themeName = $themeManager->findByDirName($themeId) ?: $themeId;
            $this->info($flag . $themeName);
        }

        if ($this->option('include-marketplace')) {

            // @todo List everything in the marketplace - not just popular.

            $popularThemes = $updateManager->requestPopularProducts('theme');

            foreach ($popularThemes as $popularTheme) {
                if (!$themeManager->isInstalled($popularTheme['code'])) {
                    $this->info('[ ] '.$popularTheme['code']);
                }
            }
        }

        $this->info(PHP_EOL."[*] Active    [-] Installed    [ ] Not installed");
    }

    /**
     * Get the console command arguments.
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     */
    protected function getOptions()
    {
        return [
            ['include-marketplace', 'm', InputOption::VALUE_NONE, 'Include downloadable themes from the October marketplace.']
        ];
    }
}
