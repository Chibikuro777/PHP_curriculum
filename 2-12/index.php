<form action="result.php" method="POST">
    お名前：<input type="text" name="name"><br>
    ご希望商品：
    <input type="radio" name="item" value="A賞">A賞
    <input type="radio" name="item" value="B賞">B賞
    <input type="radio" name="item" value="C賞">C賞
    <br>
    個数：<select name="item_number">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <option value="<?php echo $i ?>">
                <?php echo $i ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込">
</form>

<!-- モジュールとは…
機能単位、交換可能な構成部分などを意味する英単語。機器やシステムの一部を構成するひとまとまりの機能を持った部品で、システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもののことを指す。

バージョン管理システムとは…
ファイルの変更履歴の保存・管理を行うソフトウェア。管理下のファイルについて、過去の版の参照や、複数の版の比較、差分の検出などを行うことができる。

サブクエリとは…
データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。 -->