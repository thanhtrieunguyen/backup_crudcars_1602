<h3>hello {{ $account->name }}</h3>

<p>
    Xác minh email
</p>

<p>
    <a href="{{ route('account.verify', $account->email) }}">hello, click here to verify your account</a>
</p>
