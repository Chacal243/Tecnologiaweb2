<body>
    <?php
        session_start();
        $mensaje = $_SESSION['mensaje'] ?? '';
        $url = $_SESSION['url'] ?? '';
        unset($_SESSION['mensaje'], $_SESSION['url']);
    ?>
    <div class="card">
        <?php if ($mensaje): ?>
            <div class="success-message"><?= $mensaje ?></div>
            <?php if ($url): ?>
                <a href="<?= $url ?>" download><strong>Mostrar</strong></a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>