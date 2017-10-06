[![CircleCI](https://circleci.com/gh/aklabo/laravel.example/tree/master.svg?style=svg&circle-token=2b3d7a8c676f12d76ffc1bac892ee4352c76b418)](https://circleci.com/gh/aklabo/laravel.example/tree/master)
https://circleci.com/gh/aklabo/laravel.example/tree/master.svg?style=shield&circle-token=2b3d7a8c676f12d76ffc1bac892ee4352c76b418

# About [WIP]

Laravel に慣れるためのサンプルアプリケーションです。

# Getting Started

#### GitHub アカウントを作成します。

https://github.com

#### Amazon Linux で Laravel を利用可能にする

```
$ sudo yum install php70
$ sudo yum install php70-zip
$ sudo yum install php70-mbstring
$ sudo yum install php70-pdo
$ sudo yum install mod24_ssl
```

#### Ubuntu 16

```
$ sudo apt-get install php-xml
```

#### Ansible をセットアップする

アプリケーションの開発自体に Ansible は必要ありませんが、アプリケーションのデプロイをする際に便利です。

Ansible は Linux のパッケージ管理システム(yum, apt, ...)でサクッと入る場合もあります。Ansible のウェブサイトから、自分のディストリビューションの項をよく確認してください。

Python + pip がセットアップされていれば↓のコマンドでインストールできるはずです。

```
$ sudo pip install ansible
```


- [EC2] ... yum epel でインストールしないでください。(yum が動かない)

#### composer をセットアップする

1. https://getcomposer.org の Getting Started を参照して insteller をダウンロードします。
2. installer を実行して composer.phar をダウンロードします。
3. composer.phar を任意の場所に置きます。拡張子を取り除いて /usr/local/bin/composer とする例が多いようです。

#### Laravel をセットアップする

任意のユーザーで次のコマンドを実行します。Laravel のセットがプライベートな空間に配置されます。

```
$ composer global require "laravel/installer"
```

`~/.composer/vendor/laravel/installer/laravel` にパスを通しておきます。`~/.bashrc` などに入れておけば自動的に設定されるようになります。

```
$ PATH=$PATH:~/.composer/vendor/laravel/installer
```

#### Laravel のプロジェクトスケルトンを作成してみる

Laravel のアプリケーションを作成してみましょう。

```
$ composer create-project --prefer-dist laravel/laravel myfirstapp
```

- キー生成のメッセージが出力されたら成功です。そうでなければ何か問題が起きています。画面上のメッセージにヒントが隠されているので確認しましょう。

# 作業を始める

#### リポジトリをローカルコンピューター上に持ってくる(=clone する)


> ※    
> ※ [WIP] リポジトリに編集権があるかどうかによって、clone の方法が異なります。       
> ※ 現在、本手順は「編集権がある」という前提の手順になっています。編集権が無い        
> ※ 場合は一旦 fork してから pull request を提出する、といった作業の流れになります。→ そのうち追記           
> ※        

GitHub 上では一つのアプリケーションを一つのリポジトリで管理します。アプリケーションの開発に加わるには、リポジトリをローカルコンピューターに複製する必要があります。

任意のディレクトリにリポジトリを clone します。この作業コピーに対して編集を行います。

```
$ git clone git@github.com:aklabo/laravel.example.git
```

通常、共通のリポジトリに PHP のパッケージ類は置きません。リポジトリに置くのは、「どういったパッケージを利用しているか」、という情報のみです。従って、clone したウェブアプリケーションにパッケージ類を注入する作業が必要になります。

アプリケーションのディレクトリに入ってからパッケージをダウンロードします。vendor というディレクトリが作成され、その中にパッケージが保管されます。なお、vendor は .gitignore によって Git 管理対象外になっています。

```
$ cd laravel.example
$ composer create-project
```


# ビルトインのサーバーでウェブサイトを公開する

Laravel はビルトインサーバーを持っています。

```
$ php artisan serve --host 0.0.0.0 --port 8080
```

# Apache 2 のコンテンツとしてデプロイする

localhost の /var/www/... にアプリケーションをデプロイします。

```
$ ansible-playbook publish-playbook.yml
```

# その他の設定

#### ウェブアプリケーションを Apache で公開する

- ここまで Ansible でできるはず [WIP]

`/etc/httpd/conf/httpd.conf` を編集

- DocumentRoot を "/var/www/laravel.example/public" に変更する。
- Directory "/var/www/laravel.example/public" の属性を変更する。

```
<Directory "/var/www/laravel.example/public">

	...

	AllowOverride All

	...

</Directory>
```

- "/var/www/laravel.example/storage の所有者を apache に変更する。[調査中]

(書きかけ...)



