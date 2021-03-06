<?php
namespace Affilicious_Theme\Design\Presentation\Customizer;

if (!defined('ABSPATH')) {
	exit('Not allowed to access pages directly.');
}

class Header_Customizer extends Abstract_Customizer
{
	/**
	 * @inheritdoc
	 * @since 0.6
	 */
	public function init()
	{
        $font_choices = array(
            'serif'          => 'Serif',
            'sans-serif'     => 'Sans Serif',
            'helvetica'      => 'Helvetica',
            'helvetica neue' => 'Helvetica Neue',
            'monospace'      => 'Monospaced',
        );

		$panel = 'afft-header';

		$panels[] = array(
			'id'       => $panel,
			'title'    => __('Header', 'affilicious-theme'),
			'priority' => '30'
		);

        $section = 'afft-header-banner';

        $sections[] = array(
            'id'       => $section,
            'title'    => __('Banner', 'affilicious-theme'),
            'priority' => '10',
            'panel'    => $panel
        );

		$options['afft-header-banner-background-color-top'] = array(
			'id'        => 'afft-header-banner-background-color-top',
			'label'     => __('Background Color (Top)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#fff',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-color-bottom'] = array(
			'id'        => 'afft-header-banner-background-color-bottom',
			'label'     => __('Background Color (Bottom)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#fff',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-image'] = array(
			'id'        => 'afft-header-banner-background-image',
			'label'     => __('Background Image', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'upload',
			'default'   => '',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-repeat'] = array(
			'id'        => 'afft-header-banner-background-repeat',
			'label'     => __('Background Repeat', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'select',
			'choices'   => array(
				'no-repeat' => __('None', 'affilicious-theme'),
				'repeat'    => __('Repeat', 'affilicious-theme'),
				'repeat-x'  => __('Repeat X', 'affilicious-theme'),
				'repeat-y'  => __('Repeat Y', 'affilicious-theme'),
			),
			'default'   => 'no-repeat',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-attachment'] = array(
			'id'        => 'afft-header-banner-background-attachment',
			'label'     => __('Background Attachment', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'select',
			'choices'   => array(
                'fixed'   => __('Fixed', 'affilicious-theme'),
                'scroll'  => __('Scroll', 'affilicious-theme'),
                'local'   => __('Local', 'affilicious-theme'),
			),
			'default'   => 'fixed',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-size'] = array(
			'id'        => 'afft-header-banner-background-size',
			'label'     => __('Background Size', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'select',
			'choices'   => array(
				'auto'    => __('None', 'affilicious-theme'),
				'custom'  => __('Custom', 'affilicious-theme'),
				'contain' => __('Contain', 'affilicious-theme'),
				'cover'   => __('Cover', 'affilicious-theme'),
			),
			'default'   => 'auto',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-width'] = array(
			'id'        => 'afft-header-banner-background-width',
			'label'     => __('Background Width', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'text',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-background-height'] = array(
			'id'        => 'afft-header-banner-background-height',
			'label'     => __('Background Height', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'text',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-title-color'] = array(
			'id'        => 'afft-header-banner-title-color',
			'label'     => __('Title Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#000',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-title-shadow-color'] = array(
			'id'          => 'afft-header-banner-title-shadow-color',
			'label'       => __('Title Shadow Color', 'affilicious-theme'),
			'section'     => $section,
            'description' => __('Leave the color empty for transparency.', 'affilicious-theme'),
			'type'        => 'color',
			'default'     => '',
			'transport'   => 'postMessage',
		);

        $options['afft-header-banner-title-font-family'] = array(
            'id'        => 'afft-header-banner-title-font-family',
            'label'     => __('Title Font Family', 'affilicious-theme'),
            'section'   => $section,
            'type'      => 'select',
            'choices'   => $font_choices,
            'default'   => 'helvetica neue',
            'transport' => 'postMessage'
        );

		$options['afft-header-banner-tagline-color'] = array(
			'id'        => 'afft-header-banner-tagline-color',
			'label'     => __('Tagline Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#555',
			'transport' => 'postMessage',
		);

		$options['afft-header-banner-tagline-shadow-color'] = array(
			'id'          => 'afft-header-banner-tagline-shadow-color',
			'label'       => __('Tagline Shadow Color', 'affilicious-theme'),
			'section'     => $section,
			'description' => __('Leave the color empty for transparency.', 'affilicious-theme'),
			'type'        => 'color',
			'default'     => '',
			'transport'   => 'postMessage',
		);

        $options['afft-header-banner-tagline-font-family'] = array(
            'id'        => 'afft-header-banner-tagline-font-family',
            'label'     => __('Tagline Font Family', 'affilicious-theme'),
            'section'   => $section,
            'type'      => 'select',
            'choices'   => $font_choices,
            'default'   => 'helvetica neue',
            'transport' => 'postMessage'
        );

		$section = 'afft-header-main-menu';

		$sections[] = array(
			'id'       => $section,
			'title'    => __('Main Menu', 'affilicious-theme'),
			'priority' => '11',
			'panel'    => $panel
		);

		$options['afft-header-main-menu-background-color-top'] = array(
			'id'        => 'afft-header-main-menu-background-color-top',
			'label'     => __('Background Color (Top)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#f8f8f8',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-background-color-bottom'] = array(
			'id'        => 'afft-header-main-menu-background-color-bottom',
			'label'     => __('Background Color (Bottom)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#f8f8f8',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-border-color'] = array(
			'id'        => 'afft-header-main-menu-border-color',
			'label'     => __('Border Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#e7e7e7',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-item-background-color-hover-top'] = array(
			'id'        => 'afft-header-main-menu-item-background-color-hover-top',
			'label'     => __('Item Background Color (Hover Top)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#f2f2f2',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-item-background-color-hover-bottom'] = array(
			'id'        => 'afft-header-main-menu-item-background-color-hover-bottom',
			'label'     => __('Item Background Color (Hover Bottom)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#f2f2f2',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-link-color'] = array(
			'id'        => 'afft-header-main-menu-link-color',
			'label'     => __('Link Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#555',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-link-color-hover'] = array(
			'id'        => 'afft-header-main-menu-link-color-hover',
			'label'     => __('Link Color (Hover)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#000',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-dropdown-background-color'] = array(
			'id'        => 'afft-header-main-menu-dropdown-background-color',
			'label'     => __('Dropdown Background Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#434a54',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-dropdown-item-background-color-hover'] = array(
			'id'        => 'afft-header-main-menu-dropdown-item-background-color-hover',
			'label'     => __('Dropdown Item Background Color (Hover)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#353a42',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-dropdown-link-color'] = array(
			'id'        => 'afft-header-main-menu-dropdown-link-color',
			'label'     => __('Dropdown Link Color', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#fff',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-dropdown-link-color-hover'] = array(
			'id'        => 'afft-header-main-menu-dropdown-link-color-hover',
			'label'     => __('Dropdown Link Color (Hover)', 'affilicious-theme'),
			'section'   => $section,
			'type'      => 'color',
			'default'   => '#fff',
			'transport' => 'postMessage',
		);

		$options['afft-header-main-menu-toggle-background-color'] = array(
			'id'          => 'afft-header-main-menu-toggle-background-color',
			'label'       => __('Toggle Background Color', 'affilicious-theme'),
			'description' => __('Only visible on mobile devices', 'affilicious-theme'),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#f8f8f8',
			'transport'   => 'postMessage',
		);

		$options['afft-header-main-menu-toggle-background-color-hover'] = array(
			'id'          => 'afft-header-main-menu-toggle-background-color-hover',
			'label'       => __('Toggle Background Color (Hover)', 'affilicious-theme'),
			'description' => __('Only visible on mobile devices', 'affilicious-theme'),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#e7e7e7',
			'transport'   => 'postMessage',
		);

		$options['afft-header-main-menu-toggle-border-color'] = array(
			'id'          => 'afft-header-main-menu-toggle-border-color',
			'label'       => __('Toggle Border Color', 'affilicious-theme'),
			'description' => __('Only visible on mobile devices', 'affilicious-theme'),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#555555',
			'transport'   => 'postMessage',
		);

		$options['afft-header-main-menu-toggle-border-color-hover'] = array(
			'id'          => 'afft-header-main-menu-toggle-border-color-hover',
			'label'       => __('Toggle Border Color (Hover)', 'affilicious-theme'),
			'description' => __('Only visible on mobile devices', 'affilicious-theme'),
			'section'     => $section,
			'type'        => 'color',
			'default'     => '#000000',
			'transport'   => 'postMessage',
		);

		$options['sections'] = $sections;
		$options['panels']   = $panels;

		return $options;
	}

	/**
	 * @inheritdoc
	 * @since 0.6
	 */
	public function render()
	{
		$this->render_selectors(
			'afft-header-banner-background-color-top',
			'afft-header-banner-background-color-bottom',
			function ($mod1, $mod2) {
				$top    = sanitize_hex_color($mod1);
				$bottom = sanitize_hex_color($mod2);

				if ($top === $bottom) {
					return array(
						'selectors'    => array(
							'#header',
						),
						'declarations' => array(
							'background-color' => $bottom,
						)
					);
				}

				// The spaces are necessary to avoid duplicated keys
				return array(
					'selectors'    => array(
						'#header'
					),
					'declarations' => array(
						'background-color' => $bottom,
						'background'       => "-webkit-gradient(linear, 0% 0%, 0% 100%, from($top), to($bottom))",
						'background '      => "-webkit-linear-gradient(top, $top, $bottom)",
						'background  '     => "-moz-linear-gradient(top, $top, $bottom)",
						'background   '    => "-o-linear-gradient(top, $top, $bottom)",
						'background    '   => "linear-gradient($top, $bottom)",
					)
				);
			}
		);

		$this->render_selectors('afft-header-banner-background-image', function ($mod) {
			$url = esc_url($mod);
			if(empty($url)) {
				return null;
			}

			return array(
				'selectors'    => array(
					'#header',
				),
				'declarations' => array(
					'background-image' => 'url(' . $url . ')'
				)
			);
		});

		$this->render_selectors('afft-header-banner-background-repeat', function ($mod) {
			if(empty($mod)) {
				return null;
			}

			return array(
				'selectors'    => array(
					'#header',
				),
				'declarations' => array(
					'background-repeat' => $mod
				)
			);
		});

		$this->render_selectors('afft-header-banner-background-attachment', function ($mod) {
			if(empty($mod)) {
				return null;
			}

			return array(
				'selectors'    => array(
					'#header',
				),
				'declarations' => array(
					'background-attachment' => $mod
				)
			);
		});

		$this->render_selectors(
			'afft-header-banner-background-size',
			'afft-header-banner-background-width',
			'afft-header-banner-background-height',
			function ($size, $width, $height) {
				if(empty($size)) {
					return null;
				}

				if ($size === 'custom') {
					return array(
						'selectors'    => array(
							'#header',
						),
						'declarations' => array(
							'background-size' => $width . ' ' . $height,
						)
					);
				}

				return array(
					'selectors'    => array(
						'#header',
					),
					'declarations' => array(
						'background-size' => $size
					)
				);
			}
		);

		$this->render_selectors('afft-header-banner-title-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#title'
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-banner-title-shadow-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			// There is no transparent color picker. The color #600099 stands for transparency
			if ($color !== '') {
				return array(
					'selectors'    => array(
						'#title'
					),
					'declarations' => array(
						'text-shadow' => '1px 1px 1px ' . $color
					)
				);
			}
		});

        $this->render_selectors('afft-header-banner-title-font-family', function ($mod) {
            $stack = customizer_library_get_font_stack($mod);

            return array(
                'selectors'    => array(
                    '#title'
                ),
                'declarations' => array(
                    'font-family' => $stack
                )
            );
        });

		$this->render_selectors('afft-header-banner-tagline-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#tagline'
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-banner-tagline-shadow-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			// There is no transparent color picker. The color #600099 stands for transparency
			if ($color !== '') {
				return array(
					'selectors'    => array(
						'#tagline'
					),
					'declarations' => array(
						'text-shadow' => '1px 1px 1px ' . $color
					)
				);
			}
		});

        $this->render_selectors('afft-header-banner-tagline-font-family', function ($mod) {
            $stack = customizer_library_get_font_stack($mod);

            return array(
                'selectors'    => array(
                    '#tagline'
                ),
                'declarations' => array(
                    'font-family' => $stack
                )
            );
        });

		$this->render_selectors(
			'afft-header-main-menu-background-color-top',
			'afft-header-main-menu-background-color-bottom',
			function ($mod1, $mod2) {
				$top    = sanitize_hex_color($mod1);
				$bottom = sanitize_hex_color($mod2);

				// The spaces are necessary to avoid duplicated keys
				return array(
					'selectors'    => array(
						'#main-menu'
					),
					'declarations' => array(
						'background-color' => $bottom,
						'background'       => "-webkit-gradient(linear, 0% 0%, 0% 100%, from($top), to($bottom))",
						'background '      => "-webkit-linear-gradient(top, $top, $bottom)",
						'background  '     => "-moz-linear-gradient(top, $top, $bottom)",
						'background   '    => "-o-linear-gradient(top, $top, $bottom)",
						'background    '   => "linear-gradient($top, $bottom)",
					)
				);
			}
		);

		$this->render_selectors('afft-header-main-menu-border-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			// The spaces are necessary to avoid duplicated keys
			return array(
				'selectors'    => array(
					'#main-menu'
				),
				'declarations' => array(
					'border-color' => $color,
				)
			);
		});

		$this->render_selectors(
			'afft-header-main-menu-item-background-color-hover-top',
			'afft-header-main-menu-item-background-color-hover-bottom',
			function ($mod1, $mod2) {
				$top    = sanitize_hex_color($mod1);
				$bottom = sanitize_hex_color($mod2);

				// The spaces are necessary to avoid duplicated keys
				return array(
					'selectors'    => array(
						'#main-menu .navbar-nav > .menu-item > a:hover',
						'#main-menu .navbar-nav > .menu-item > a:focus',
						'#main-menu .navbar-nav > .menu-item.active > a',
						'#main-menu .navbar-nav > .menu-item.open > a',
					),
					'declarations' => array(
						'background-color' => $bottom,
						'background'       => "-webkit-gradient(linear, 0% 0%, 0% 100%, from($top), to($bottom))",
						'background '      => "-webkit-linear-gradient(top, $top, $bottom)",
						'background  '     => "-moz-linear-gradient(top, $top, $bottom)",
						'background   '    => "-o-linear-gradient(top, $top, $bottom)",
						'background    '   => "linear-gradient($top, $bottom)",
					)
				);
			}
		);

		$this->render_selectors('afft-header-main-menu-link-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-nav > .menu-item > a',
					'#main-menu .navbar-brand'
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-link-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-nav > .menu-item > a:hover',
					'#main-menu .navbar-nav > .menu-item.active > a',
					'#main-menu .navbar-brand:hover',
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-dropdown-background-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .dropdown-menu'
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-dropdown-item-background-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .dropdown-menu > .menu-item > a:hover',
					'#main-menu .dropdown-menu > .menu-item > a:focus',
					'#main-menu .dropdown-menu > .menu-item.active > a',
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-dropdown-link-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .dropdown-menu > .menu-item > a'
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-dropdown-link-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .dropdown-menu > .menu-item > a:hover',
				),
				'declarations' => array(
					'color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-background-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle',
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-background-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle:hover',
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-border-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle',
				),
				'declarations' => array(
					'border-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-border-color', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle .icon-bar',
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-border-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle:hover',
				),
				'declarations' => array(
					'border-color' => $color
				)
			);
		});

		$this->render_selectors('afft-header-main-menu-toggle-border-color-hover', function ($mod) {
			$color = sanitize_hex_color($mod);

			return array(
				'selectors'    => array(
					'#main-menu .navbar-toggle:hover .icon-bar',
				),
				'declarations' => array(
					'background-color' => $color
				)
			);
		});
	}

	/**
	 * @inheritdoc
	 * @since 0.6
	 */
	public function enqueue_scripts()
	{
		// Nothing to do here
	}
}
