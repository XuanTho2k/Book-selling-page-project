
<div class="creat-account-by-email">
  <form action="" method="post">
      <img class="right-image-icon" alt="" src="<?php echo ASSETS ?>/bookstore/img/book-signup.png" />

      <div class="body">

        <div class="label-content">
          <div class="heading">Create account</div>
          <div class="content">
            <div class="tabs">
              <div class="tabs1">
                <div class="left-tabs">
                  <div class="by-email">
                    <div class="by-email1">by Email</div>
                  </div>
                  <div class="line"></div>
                </div>
                <div class="right-tab">
                  <div class="by-phone">by Phone</div>
                  <div class="extra-text">Default Tab title</div>
                </div>
              </div>
              <div class="tabs-child"></div>
            </div>
            <input required class="email" name="email" placeholder="Enter your email" type="email" />

            <input required
              class="create-password"
              name="pw"
              placeholder="Create a password"
              type="password"
            />

            <input required
              class="create-password"
              name="confirm-pw"
              placeholder="Confirm password"
              type="password"
            />
            <div>
            <?php
            if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
              echo '<p style="color:red">' . $_SESSION['error'] . '</p>';
            }
            ?>
          </div>
          </div>
        </div>
        <div class="cta">
          <button type="submit" class="cta1">
            <div class="continue">Continue</div>
          </button>
          <div class="term-policy">
            <div class="text">By signing up, I have read an agree to</div>
            <div class="text1">
              <span class="terms">Terms</span>
              <span class="and"> and </span>
              <span class="terms">Privacy Policy</span>
            </div>
          </div>
        </div>
      </div>
      <div class="sign-in-option">
        <div class="by-phone">Old BookLand?</div>
        <a href="login" class="sign-in">Sign in</a>
      </div>
  </form>
      <div class="logo">
        <a class="layer-x0020-1">
          <img class="vector-icon" alt="" src="<?php echo ASSETS ?>/bookstore/img/vector.svg" />

          <img class="vector-icon1" alt="" src="<?php echo ASSETS ?>/bookstore/img/vector1.svg" />

          <img class="vector-icon2" alt="" src="<?php echo ASSETS ?>/bookstore/img/vector2.svg" />

          <img class="vector-icon3" alt="" src="<?php echo ASSETS ?>/bookstore/img/vector3.svg" />

          <img class="vector-icon4" alt="" src="<?php echo ASSETS ?>/bookstore/img/vector4.svg" />
        </a>
        <div class="logo-text">BOOKLAND</div>
      </div>
    </div>
