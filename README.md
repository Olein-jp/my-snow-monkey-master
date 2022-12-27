# My Snow Monkey Master

WordPress プレミアムテーマ [Snow Monkey](https://snow-monkey.2inc.org/) をカスタマイズするためのプラグインです。

よく使うカスタマイズの雛形をまとめているので、そこから拡張して開発を進めることができます。

## 仕組み

`src/css` と `src/js` はコンパイルすると `build/css` と `build/js` を生成し、それらを `my-snow-monkey-master.php` から 読み込んでいます。

その他、`functions` や `snow-monkey` などがあり、これらに含む PHP ファイルは自動的に全て読み込まれます。この仕組みは [`rocket-martue/my-snow-monkey-plus/my-snow-monkey-plus.php`](https://github.com/rocket-martue/my-snow-monkey-plus/blob/ff7b84595e3d2d5e5d780245e16a9288f54369ee/my-snow-monkey-plus.php#L35)を参考にしています。謝意。

## 各種スクリプト
詳しくは `package.json` を確認してください。

## 定数
- `MY_SNOW_MONKEY_MASTER_URL` : My Snow Monkey プラグインディレクトリへの URL
- `MY_SNOW_MONKEY_MASTER_PATH` : My Snow Monkey プラグインディレクトリへの ファイルパス
