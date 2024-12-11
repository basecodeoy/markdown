<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Markdown;

use BaseCodeOy\Crate\Package\AbstractServiceProvider;
use Illuminate\Contracts\Container\Container;
use League\CommonMark\ConverterInterface;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Environment\EnvironmentInterface;
use League\CommonMark\MarkdownConverter;

final class ServiceProvider extends AbstractServiceProvider
{
    #[\Override()]
    public function packageRegistered(): void
    {
        $this->registerEnvironment();

        $this->registerMarkdown();
    }

    #[\Override()]
    public function provides(): array
    {
        return [
            'markdown.environment',
            'markdown.converter',
        ];
    }

    private function registerEnvironment(): void
    {
        $this->app->singleton('markdown.environment', function (Container $container): Environment {
            $environment = new Environment($container->config->get('markdown.environment'));

            foreach ($container->config->get('markdown.extensions') as $extension) {
                $environment->addExtension($container->make($extension));
            }

            return $environment;
        });

        $this->app->alias('markdown.environment', Environment::class);
        $this->app->alias('markdown.environment', EnvironmentInterface::class);
        $this->app->alias('markdown.environment', EnvironmentBuilderInterface::class);
    }

    private function registerMarkdown(): void
    {
        $this->app->singleton('markdown.converter', function (Container $container): MarkdownConverter {
            $converter = $container->config->get('markdown.converter');

            return new $converter($container['markdown.environment']);
        });

        $this->app->alias('markdown.converter', MarkdownConverter::class);
        $this->app->alias('markdown.converter', ConverterInterface::class);
    }
}
