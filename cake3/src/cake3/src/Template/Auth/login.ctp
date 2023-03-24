
<h2>login</h2>

<form method="post" action="/auth/login">
    <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
    <div>
        <input type="text" name="email">
    </div>
    <div>
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="ログイン">
    </div>
</form>
