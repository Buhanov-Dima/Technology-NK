	<!-- Footer -->

	<footer class="footer">
        <div class="container d-flex flex-column">
            <div class="footer-menu w-100">

                <div class="footer-nav-link d-flex flex-column">
                    <a class="footer-nav-link-main" href="<?php echo get_permalink(26); ?>">О компании</a>
                    <!-- <a href="<?php echo get_permalink(36); ?>">Услуги</a> -->
                    <a href="<?php echo get_permalink(42); ?>">Проектирование</a>
                    <a href="<?php echo get_permalink(68); ?>">Проекты</a>
                </div>

                <div class="footer-nav-link d-flex flex-column">
                    <!-- <a class="footer-nav-link-main" href="#">Производство</a> -->
                    <a class="footer-nav-link-main" href="<?php echo get_permalink(61); ?>">Производство щитов и корпусов</a>
                    <a href="<?php echo get_permalink(170); ?>">Производство климатических блок-боксов</a>
                    <a href="<?php echo get_permalink(48); ?>">Автоматизация</a>
                    <a href="<?php echo get_permalink(45); ?>">Монтаж и ПНР</a>
                </div>

                <div class="footer-nav-link d-flex flex-column">
                    <a class="footer-nav-link-main" href="<?php echo get_permalink(); ?>">Контакты</a>
                    <a href="<?php echo get_permalink(); ?>">Сертификаты</a>
                    <div class="social-links">
                        <a href="tg://resolve?domain=@Al_59"><i class="fab fa-telegram-plane" style="font-size: 20px;"></i></a>
                        <a href="mailto: tech@technology-nk.ru"><i class="fa fa-envelope" style="font-size: 20px;"></i></a>
                        <a href="https://wa.me/+79299011125"><i class="fab fa-whatsapp" style="font-size: 20px;"></i></a>
                    </div>
                </div>
            </div>

            <div class="mt-1 text-center rights-reserved">
                <p>&copy; 2024 Технология-НК. Все права защищены.</p>
            </div>
        </div>
    </footer>

	<div class="d-flex d-center">
        <div class="menu-wrapper">
            <input type="checkbox" id="toggle">
            <label for="toggle">
              <div class="main-button">
                <i class="fas fa-plus"></i>
              </div>
            </label>
        
            <!-- Иконки -->
			<div class="icon icon1 blur-background"><a href="tg://resolve?domain=@Al_59"><i class="fab fa-telegram-plane" style="color: rgba(237, 177, 23, 1);"></i></a></div>
            <div class="icon icon2 blur-background"><a href="tel:+79299011125"><i class="fas fa-phone-alt" style="color: rgba(237, 177, 23, 1);"></i></a></div>
            <div class="icon icon3 blur-background"><a href="https://wa.me/+79299011125"><i class="fab fa-whatsapp" style="color: rgba(237, 177, 23, 1);"></i></a></div>
        </div>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="contactForm" method="post" enctype="multipart/form-data" class="form-validate">
                    <div class="modal-header">
                        <h5 class="modal-title">Связаться с нами</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">ФИО</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" name="phone" id="phone" class="form-control phone-validate phone-mask" placeholder="+7 (___) ___-__-__" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control email-validate">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Вопрос</label>
                            <textarea name="message" id="message" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="attachments" class="form-label">Прикрепить файл(ы)</label>
                            <input type="file" name="attachments[]" id="attachments" class="form-control" multiple>
                            <div id="fileList" class="form-text mt-2"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php if (isset($_GET['contact_sent'])): ?>
        <div class="alert alert-<?php echo $_GET['contact_sent'] === '1' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
            <?php echo $_GET['contact_sent'] === '1' ? 'Сообщение отправлено успешно!' : 'Ошибка при отправке сообщения.'; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
        </div>
    <?php endif; ?>



    </div> <!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
