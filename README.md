A WP Theme for Three for Flavin official site
=============================================

準備
----

1. 必要なソフトをインストールします。

   * Git
   * Node.js + NPM
   * Docker + docker-compose

2. ローカル環境にファイルを展開し、展開したディレクトリに入ります。

   ```bash
   $ git clone https://github.com/yadex205/tff-web.git
   $ cd tff-web
   ```

3. 準備作業を行うためのコマンドを実行します。

   ```bash
   $ npm install
   $ npm run bootstrap
   ```

制作作業
--------

1. WordPress が実行される仮想環境 (Docker) を起動します。

   ```bash
   $ npm run docker:start
   ```

   なお、初回起動時は Docker イメージの取得が必要なため、時間がかかる場合があります。

2. 編集内容がリアルタイムに反映される live 環境を起動します。

   ```bash
   $ npm run live
   ```

   コマンド実行後、ローカルで実行されている WordPress ページが自動的にブラウザで開かれます。

3. 好きなエディタで `/src/` ディレクトリ以下を編集します。

4. 編集作業を終えたら、まず live 環境を `Ctrl+C` で停止します

5. WordPress が実行されている仮想環境を停止します。

   ```bash
   $ npm run docker:stop
   ```

6. (オプション) Docker 上のデータベースの内容を初期化したい場合は、以下のコマンドを実行します。

   ```bash
   $ npm run docker:destroy
   ```
