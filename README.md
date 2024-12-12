<h2>環境構築</h2>
<p>Dockerビルド</p>
<ol>
	<li>git clone git@github.com:redkirby258/check-test_contact-form.git</li>
 	<li>docker-compose up -d --build</li>
</ol>
 <p>laravel環境構築</p>
 <ol>
	<li>docker-compose exec php bash</li>
 	<li>composer install</li>
	 <li>.env.exampleファイルから.envを作成し、環境変数を変更</li>
	 <li>php artisan key:generate</li>
	 <li>php artisan migrate</li>
	 <li>php artisan db:seed</li>
</ol>
<h2>使用技術</h2>
	<ul>
		<li>PHP 7.49</li>
		<li>laravel 8.83.8</li>
		<li>Mysql 8.0.26</li>
	</ul>
 <h2>URL</h2>
 	<ul>
		<li>開発環境  :  http://localhost/</li>
		<li>phpMyAdmin  :  http://localhost:8080/</li>
	</ul>
