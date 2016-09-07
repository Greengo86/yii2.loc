<?php if (!empty($session['cart'])):  ?>
    <div class="table-responsive">
         <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($session['cart'] as $id => $item): ?>
                    <tr>
                        <td><?php echo \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50])?></td>
                        <td><?php echo $item['name']?></td>
                        <td><?php echo $item['qty']?></td>
                        <td><?php echo $item['price']?></td>
                        <td><span data-id="<?php echo $id ?>"class="glyphicon glyphicon-remove test-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach ?>
                    <tr>
                        <td colspan="4">Итого:</td>
                        <td><?php echo $session['cart.qty']?></td>
                    </tr>
                    <tr>
                        <td colspan="4">На сумму:</td>
                        <td><?php echo $session['cart.sum']?></td>
                    </tr>
                </tbody>
          </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>