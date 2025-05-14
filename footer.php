	<!-- Footer -->

	<footer class="footer">
        <div class="container d-flex flex-column">
            <div class="footer-menu w-100">

                <div class="footer-nav-link d-flex flex-column">
                    <a class="footer-nav-link-main" href="#">О компании</a>
                    <a href="#">Услуги</a>
                    <a href="#">Проектирование</a>
                    <a href="#">Проекты</a>
                </div>

                <div class="footer-nav-link d-flex flex-column">
                    <a class="footer-nav-link-main" href="#">Производство</a>
                    <a href="#">Производство щитов и корпусов</a>
                    <a href="#">Производство климатических блок-боксов</a>
                    <a href="#">Автоматизация</a>
                    <a href="#">Монтаж и ПНР</a>
                </div>

                <div class="footer-nav-link d-flex flex-column">
                    <a class="footer-nav-link-main" href="#">Контакты</a>
                    <a href="#">Сертификаты</a>
                    <div class="social-links">
                    <a href="#"><i class="fab fa-telegram-plane" style="font-size: 20px;"></i></a>
                    <a href="#"><i class="fa fa-envelope" style="font-size: 20px;"></i></a>
                    <a href="#"><i class="fab fa-whatsapp" style="font-size: 20px;"></i></a>
                </div>
                </div>

                <!-- <div class="footer-nav-link d-flex flex-column">
                    <div class="btn-container">
                        <button class="btn btn-primary effect">Связаться с нами</button>
                    </div>
                </div> -->

            </div>

            <div class="mt-1 text-center rights-reserved">
                <!-- иконки wap tg почта -->

                <!-- <div class="icon icon1"><a href="tg://resolve?domain=@Al_59"><i class="fab fa-telegram-plane"></i></a></div>
            <div class="icon icon2"><a href="tel:+79299011125"><i class="fas fa-phone-alt"></i></a></div>
            <div class="icon icon3"><a href="#"><i class="fab fa-whatsapp"></i></a></div> -->
                <!-- <div class="social-links">
                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div> -->

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
			<div class="icon icon1"><a href="tg://resolve?domain=@Al_59"><i class="fab fa-telegram-plane"></i></a></div>
            <div class="icon icon2"><a href="tel:+79299011125"><i class="fas fa-phone-alt"></i></a></div>
            <div class="icon icon3"><a href="#"><i class="fab fa-whatsapp"></i></a></div>
        </div>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <form id="contactForm" method="post">
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
                    <input type="tel" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Вопрос</label>
                    <textarea name="message" id="message" class="form-control" rows="4"></textarea>
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

    </div> <!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
