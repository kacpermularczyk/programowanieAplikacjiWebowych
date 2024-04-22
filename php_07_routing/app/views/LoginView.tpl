{extends file="main.tpl"}

{block name=banner}

<div class="inner">
    <header class="major">
        <h1>Kalkulator kredytowy - logowanie</h1>
    </header>
    <div class="content">
        <form method="post" action="{$conf->action_url}login">
            <div class="fields">
                <div class="field">
                    <label for="id_login">Login</label>
                    <input type="text" name="login" id="id_login" value="{$form->login}"/>
                </div>
                <div class="field">
                    <label for="id_pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" value="{$form->pass}"/>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Zaloguj" class="primary" /></li>
            </ul>
            {include file='messages.tpl'}
        </form>
    </div>
</div>

{/block}