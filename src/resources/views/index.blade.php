<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-titile">
                    <dt class="form__group-titile-definitionterm">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </dt>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <dd class="form__input--text-name">
                            <div class="form__input--text-last-name">
                                <input type="text" name="last-name" value="{{ $contact['last-name'] }}" readonly  placeholder="例&colon;山田" />
                            </div>
                            <div class="form__input--text-first-name">
                                <input type="text" name="first-name" placeholder="例&colon;太郎" />
                            </div>
                        </dd>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-titile">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="radio" name="gender" />男性
                        <input type="radio" name="gender" />女性
                        <input type="radio" name="gender" />その他
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly  placeholder="test@example.com" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="tel" name="tel-first" value="{{ $contact['tel-first'] }}" readonly  placeholder="080" />
                    </div>
                        <p class="form__input--text-item">
                            -
                        </p>
                    <div class="form__input--text">
                        <input type="tel" name="tel-second" value="{{ $contact['tel-second'] }}" readonly  placeholder="1234" />
                    </div>
                        <p class="form__input--text-item">
                            -
                        </p>
                    <div class="form__input--text">
                        <input type="tel" name="tel-third" value="{{ $contact['tel-third'] }}" readonly  placeholder="5678" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-titile">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" value="{{ $contact['address'] }}" readonly  placeholder="例:千駄ヶ谷マンション101" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-titile">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly  placeholder="例:千駄ヶ谷マンション101" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content-kinds" value="{{ $contact['content-kinds'] }}" readonly placeholder="お問い合わせ内容をご記入ください"></textarea>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content" value="{{ $contact['content'] }}" readonly placeholder="お問い合わせ内容をご記入ください"></textarea>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
  </main>
</body>