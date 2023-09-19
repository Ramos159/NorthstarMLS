// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	important: true,
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		fontFamily: {
			'neo-sans-pro': ['NeoSansProRegular','sans-serif'],
			// 'open-sans' : ['Open Sans', 'sans-serif'],
			'neo-sans-pro-medium' : ['NeoSansProMedium', 'sans-serif'],
			'neo-sans-pro-bold' : ['NeoSansProBold','sans-serif']
		},
		extend: {
			colors: {
				'brand-body-gray': '#6F7078',
				'brand-headline-blue': '#373B61',
				'brand-logo-blue': '#3CAFD6',
				'brand-pale-yellow': '#FCE585'
			}
		}
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.

		// Add Tailwind Typography.
		require('@tailwindcss/typography'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
