var Encore = require('@symfony/webpack-encore');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const Terser = require("terser");
const CSSO = require('csso');
// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    .copyFiles(

        {
            from: 'assets/',

            // optional target path, relative to the output dir
            to: '[path][name].[ext]',
            // if versioning is enabled, add the file hash too
            //to: 'images/[path][name].[hash:8].[ext]',

            // only copy files matching this pattern
            // pattern: /\.(js|)$/
        },

    )

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/js/app.js')
    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    // .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    // .enableSingleRuntimeChunk()

    // enables @babel/preset-env polyfills
    // .configureBabelPresetEnv((config) => {
    //     config.useBuiltIns = 'usage';
    //     config.corejs = 3;
    // })

    // enables Sass/SCSS support
    .enableSassLoader()
    // .addPlugin(new CopyWebpackPlugin([
    //     {
    //         from: './assets/js',
    //         to: './js',
    //         toType: 'dir',
    //         transform: (content, path) => {
    //             if(Encore.isProduction()) {
    //                 return Terser.minify(content.toString()).code;
    //             } else {
    //                 try {
    //                     var terser = Terser.minify(content.toString()).code;
    //                     console.log(path);
    //                     return content;
    //
    //                 }catch (e) {
    //                     console.warn(path,e);
    //
    //                 }
    //             }
    //         }
    //     },
    //     {
    //         from: './assets/css',
    //         to: './css',
    //         toType: 'dir',
    //         transform: (content, path) => {
    //             if(Encore.isProduction()) {
    //                 return CSSO.minify(content.toString()).css;
    //             } else {
    //                 try {
    //                     var csso = CSSO.minify(content.toString()).css;
    //                     console.log(path);
    //                     return content;
    //
    //                 }catch (e) {
    //                     console.warn(path,e);
    //                 }
    //             }
    //         }
    //     },
    //     {
    //         from: './assets/images',
    //         to: './images',
    //         toType: 'dir'
    //     },
    //     {
    //         from: './assets/vendor',
    //         to: './vendor',
    //         toType: 'dir'
    //     }
    //     /*{
    //         from: './assets/fonts',
    //         to: './fonts',
    //         toType: 'dir'
    //     },*/
    //
    // ]))

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())
    .disableSingleRuntimeChunk()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    // .autoProvidejQuery()
    // .autoProvideVariables({
    //     $: 'jquery',
    //     jQuery: 'jquery',
    //     'window.jQuery': 'jquery',
    // })

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;

module.exports = Encore.getWebpackConfig();
