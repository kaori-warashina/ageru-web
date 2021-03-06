<?php 
session_start();
$user_id = $_SESSION[user_id];
include 'header.php';?>
<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="index.php">ageruトップ</a></li>
            <li>特定商取引法に基づく表記</li>
        </ul>
    </div>
</div> <!-- middle -->

<div class="arrow-width">
    <h2><span>特定商取引法に基づく表記</span></h2>
        <div class="share outline">
            <table>
                <tbody>
                    <tr>
                        <th>
                            <h3>事業者</h3>
                        </th>
                        <td>
                            株式会社バロックジャパンリミテッド
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>代表者</h3>
                        </th>
                        <td>
                            村井博之
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>所在地</h3>
                        </th>
                        <td>
                            〒153-0042
                        <br>
                            東京都目黒区青葉台4丁目7番7号
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>メールアドレス</h3>
                        </th>
                        <td>
                            XXXX@XXXXX
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>電話番号</h3>
                        </th>
                        <td>
                            03⁻XXXX-XXXX
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>販売価格</h3>
                        </th>
                        <td>
                            各商品ごとに表示
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>商品等の引き渡し時期</h3>
                        </th>
                        <td>
                            入金確認後、30日以内に納品
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>代金の支払方法</h3>
                        </th>
                        <td>
                            銀行振込
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>代金の支払時期</h3>
                        </th>
                        <td>
                            銀行振込の場合は30日以内
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>商品代金以外に必要な費用</h3>
                        </th>
                        <td>
                            支払い方法により所定の手数料
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <h3>返品・交換について</h3>
                        </th>
                        <td>
                            商品の性質上、商品の交換又は返品及び返金は受け付けないものとします｡
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
</div>
<?php include 'footer.php';?>
