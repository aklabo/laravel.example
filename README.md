# 概要 [WIP]

###このアプリケーションについて

Laravel に慣れるためのサンプルアプリケーションです。

# Getting Started

###GitHub アカウントを作成します。

https://github.com

###Amazon Linux で Laravel を利用可能にする

```
$ sudo yum install php70
$ sudo yum install php70-zip
$ sudo yum install php70-mbstring
$ sudo yum install php70-pdo
$ sudo yum install mod24_ssl
```

###Ubuntu 16

```
$ sudo apt-get install php-xml
```

###Ansible をセットアップする

```
$ sudo pip install ansible
```

###composer をセットアップする

1. https://getcomposer.org の Getting Started を参照して insteller をダウンロードします。
2. installer を実行して composer.phar をダウンロードします。
3. composer.phar を任意の場所に置きます。拡張子を取り除いて /usr/local/bin/composer とする例が多いようです。

###Laravel をセットアップする

任意のユーザーで次のコマンドを実行します。Laravel のセットがプライベートな空間に配置されます。

```
$ composer global require "laravel/installer"
```

~/.composer/vendor/laravel/installer/laravel にパスを通しておきます。

```
$ PATH=$PATH:~/.composer/vendor/laravel/installer
```

- 上記は ~/.bashrc などに入れておけば自動的に設定されるようになります。

###Laravel のプロジェクトスケルトンを作成してみる

Laravel のアプリケーションを動作させるための準備ができていることの確認をする。準備ができていなければ、アプリケーションのソースコードを clone しても動かない。

```
$ composer create-project --prefer-dist laravel/laravel myfirstapp
```

- キー生成のメッセージが出力されたら成功。そうでなければ画面上のエラーメッセージをチェック！

#作業を始める

###リポジトリをローカルコンピューター上に持ってくる(=clone する)

GitHub 上では一つのアプリケーションを一つのリポジトリで管理します。アプリケーションの開発に加わるには、リポジトリをローカルコンピューターに複製する必要があります。

任意のディレクトリにリポジトリを clone します。この作業コピーに対して編集を行います。

```
$ git clone git@github.com:aklabo/laravel.example.git
```

通常、共通のリポジトリに PHP のパッケージ類は置きません。リポジトリに置くのは、「どういったパッケージを利用しているか」、という情報のみです。従って、clone したウェブアプリケーションにパッケージ類を注入する作業が必要になります。

アプリケーションのディレクトリに入ってからパッケージをダウンロードします。

```
$ cd laravel.example
$ composer update
```


#ビルトインのサーバーでウェブサイトを公開する

Laravel はビルトインサーバーを持っています。

```
$ php artisan serve --host 0.0.0.0 --port 8080
```

#デプロイする

localhost の /var/www/... にアプリケーションをデプロイします。

```
$ ansible-playbook publish-playbook.yml
```

#[WIP] work in processing...





