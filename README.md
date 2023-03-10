# Wordpress テンプレートテーマファイル

## 概要

WordPress 案件をこちらのテーマを用いて統一しています。<br>
クラシックエディターを前提で作成しています。<br>

### 使用言語

- HTML
- CSS (SCSS)
- JavaScript (jQuery)
- PHP

### 使用技術

- Gulp 　<small>※package.json 参照</small>
- Node 　 ver 14.15.5
  <br>
  <br>

## ディレクトリー階層

<pre>
・
┣━━━━ assets
┃ ┣━━━━ /各ページdir/
┃ ┃  ┗━━━━ / img / …… 各ページごとのimgファイルが下部の【slice_img】フォルダーから出力される
┃ ┃  ┗━━━━ / css / …… 各ページごとのcssファイルが格納されている
┃ ┃  ┗━━━━ / js /  …… 各ページごとのjsファイルが格納されている
┃ ┃
┃ ┗━━━━ /common/
┃    ┗━━━━ / img / …… 各ページごとのimgファイルが下部の【slice_img】フォルダーから出力される
┃    ┗━━━━ / css / …… 全体共通のcssファイルが格納されている
┃    ┗━━━━ / js /  …… 全体共通のjsファイルが格納されている
┃
┣━━━━ / inc / …… functions.phpの各機能別にしたファイル群
┃
┣━━━━ / parts / …… 各ページ内の共通部品のファイル群
┃
┣━━━━ / slice_img / …… 画像圧縮用フォルダー
┃
┣━━━━ /template/
┃ ┣━━━━ / content / …… 各ページ内のテンプレートファイル群
┃ ┣━━━━ / header /    …… header.phpのテンプレートファイル群
┃ ┣━━━━ / footer /    …… footer.phpのテンプレートファイル群
┃ ┗━━━━ / mainvisual / …… 各ページ内の上部メインビジュアルテンプレートファイル群
┃
┃
┣━━━━ functions.php  …… テーマ全体に適用する設定ファイル
┃
┣━━ index.php  …… 基本テンプレートファイル      <small>※テーマ作成時必須</small>
┣━━ header.php …… header用テンプレートファイル  <small>※テーマ作成時必須</small>
┣━━ footer.php …… footer用テンプレートファイル  <small>※テーマ作成時必須</small>
┃
┣━━ front-page.php ……  TOPページ用テンプレートファイル
┣━━ page.php       ……  固定ページ用テンプレートファイル
┣━━ archive.php    ……  記事一覧用テンプレートファイル
┣━━ single.php     ……  個別投稿ページ用テンプレートファイル
┣━━ 404.php        ……  404ページ用テンプレートファイル
┃
┣━━ style.css …… テーマの情報を記述している。
┃
┗━━ README.md
</pre>

<br><br>

## 使用方法

このテンプレートファイル は Gulp を使用しています。
コンパイルに必要なパッケージは以下のコマンドでインストールされます。

```
npm install
```

<br><br>
ファイルを監視する場合は以下のコマンドを実行しましょう。

```
npm run dev
```

or

```
npx gulp
```
