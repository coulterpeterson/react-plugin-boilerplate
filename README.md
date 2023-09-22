# react-plugin-boilerplate

A bare-bones WordPress plugin boilerplate that utilizes Vite to handle the React build process.

## Quick Start
* Clone repo (preferably into the wp-content/plugins folder so you can start using it right away in WordPress)
* Run `npm install` or `yarn` in the root directory
* Activate the "React Plugin Boilerplate" plugin in WordPress
* Add the `myReactApp` shortcode to a page in WordPress
* View the page and see the React-driven counter component at work
* When you make changes, run `yarn build` or `npm run build` to generate new CSS and JS files that will get enqueued to WordPress from the plugin.
* If you want a more focused and instantly updating dev environment, run `yarn dev` or `npm run dev` for Vite to spin up a local development server, which runs the index.html file that will render your root element.

## Information From Vite Autobuilder

### React + TypeScript + Vite

This template provides a minimal setup to get React working in Vite with HMR and some ESLint rules.

Currently, two official plugins are available:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react/README.md) uses [Babel](https://babeljs.io/) for Fast Refresh
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react-swc) uses [SWC](https://swc.rs/) for Fast Refresh

#### Expanding the ESLint configuration

If you are developing a production application, we recommend updating the configuration to enable type aware lint rules:

- Configure the top-level `parserOptions` property like this:

```js
   parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module',
    project: ['./tsconfig.json', './tsconfig.node.json'],
    tsconfigRootDir: __dirname,
   },
```

- Replace `plugin:@typescript-eslint/recommended` to `plugin:@typescript-eslint/recommended-type-checked` or `plugin:@typescript-eslint/strict-type-checked`
- Optionally add `plugin:@typescript-eslint/stylistic-type-checked`
- Install [eslint-plugin-react](https://github.com/jsx-eslint/eslint-plugin-react) and add `plugin:react/recommended` & `plugin:react/jsx-runtime` to the `extends` list
