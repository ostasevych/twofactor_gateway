<?php
style('twofactor_gateway', 'style');
?>

<img class="two-factor-icon two-factor-gateway-icon" src="<?php print_unescaped(image_path('twofactor_gateway', 'app.svg')); ?>" alt="">

<p><?php p($l->t('An access code has been sent to %s', [$_['phone']])); ?></p>


<form method="POST" class="sms2-fa-form">
        <input type="tel" minlength="6" maxlength="10" name="challenge" required="required" autofocus autocomplete="off" autocapitalize="off" placeholder="<?php p($l->t('Authentication code')) ?>">
        <button
                class="primary two-factor-submit"
                type="submit"
                value="<?php echo isset($_['secret']) ? $_['secret'] : '' ?>">
                <?php p($l->t('Submit')); ?>
        </button>
</form>
