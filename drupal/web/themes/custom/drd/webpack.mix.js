let mix = require('laravel-mix');

mix.webpackConfig({
  devtool: "inline-source-map",
});
mix.sass('scss/site.scss', 'css/').sourceMaps();
mix.options({
  processCssUrls: false
});
mix.browserSync({
  proxy: 'https://oms.lndo.site',
  port: 3000,
  open: false,
});