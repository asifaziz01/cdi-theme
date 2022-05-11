<div class="row d-none" id="customer_register">
  <div class="col-12">

    <div id="customer-register-form-wrapper">

      <h2 class=""><?php esc_html_e( 'Create An Account', 'woocommerce' ); ?></h2>

      <form id="user-custom-register-form" class="woocommerce-form woocommerce-form-register register my-0 form-horizontal" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
        <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
        <?php wp_nonce_field('user_register', 'reg_user_nonce', true, true ); ?>
        <input type="hidden" name="action" value="register_user">

        <!-- Step 1 -->
        <fieldset id="cur-step1" class="checkout-user-register-tab">
          <div class=" form-group row">
            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="reg_username" autocomplete="username"
                value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="Username" required="required" />
            </div>
            <?php endif; ?>

            <div class="col-6">
              <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

              <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="reg_password" autocomplete="new-password" placeholder="Password" />

              <?php else : ?>

              <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

              <?php endif; ?>
            </div>

          </div>

          <div class=" form-group row">

            <div class="col-6">
              <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="reg_email" autocomplete="email"
                value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" placeholder="Email address" />
            </div>

            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="reg_phone" id="reg_phone" autocomplete="reg_phone"
                value="<?php echo ( ! empty( $_POST['reg_phone'] ) ) ? esc_attr( wp_unslash( $_POST['reg_phone'] ) ) : ''; ?>" placeholder="Phone Number" required="required" />
            </div>
          </div>

        </fieldset>

        <!-- Step 2 -->
        <fieldset id="cur-step2" class="checkout-user-register-tab">

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="first_name" id="reg_first_name" autocomplete="first_name"
                value="<?php echo ( ! empty( $_POST['first_name'] ) ) ? esc_attr( wp_unslash( $_POST['first_name'] ) ) : ''; ?>" placeholder="First Name" /><?php // @codingStandardsIgnoreLine ?>
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="last_name" id="reg_last_name" autocomplete="last_name"
                value="<?php echo ( ! empty( $_POST['last_name'] ) ) ? esc_attr( wp_unslash( $_POST['last_name'] ) ) : ''; ?>" placeholder="Last Name" /><?php // @codingStandardsIgnoreLine ?>
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-4">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="billing_address" id="reg_address" autocomplete="reg_address"
                value="<?php echo ( ! empty( $_POST['billing_address'] ) ) ? esc_attr( wp_unslash( $_POST['billing_address'] ) ) : ''; ?>"
                placeholder="Address/ P.O box, company name, c/o" /><?php // @codingStandardsIgnoreLine ?>
            </div>
            <div class="col-4">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="billing_city" id="reg_city" autocomplete="billing_city"
                value="<?php echo ( ! empty( $_POST['billing_city'] ) ) ? esc_attr( wp_unslash( $_POST['billing_city'] ) ) : ''; ?>" placeholder="City" />
            </div>
            <div class="col-4">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="billing_zipcode" id="reg_zipcode" autocomplete="zip_code"
                value="<?php echo ( ! empty( $_POST['billing_zipcode'] ) ) ? esc_attr( wp_unslash( $_POST['billig_zipcode'] ) ) : ''; ?>" placeholder="Zip/ Postal code" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <?php
                    woocommerce_form_field('mspa_country_field', array(
                       'type'       => 'country',
                       'class'      => array( 'chzn-drop', 'form-select' ),
                       'id'         => 'mspa_country_field',
                       'placeholder'=> __('Select a Country')
                        )
                    );
                ?>
            </div>

            <div class="col-6">
              <?php
                    woocommerce_form_field('mspa_state_field', array(
                        'type'       => 'state',
                        'class'      => array( 'chzn-drop', 'form-select' ),
                        'id'         => 'mspa_state_field',
                        'placeholder'    => __('Select a State')
                        )
                    );
                ?>
            </div>
          </div>

        </fieldset>

        <!-- Step 3 -->
        <fieldset id="cur-step3" class="checkout-user-register-tab ">
          <div class=" form-group row">
            <div class="col-6">
              <select class="hear_about_us form-select" name="hear_about_us" id="hear_about_us" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2021/08/Polygon-5.png');">
                <option value="0">How did you hear about us?</option>
                <option value="Friends">Friends</option>
                <option value="Website">Website</option>
                <option value="Social Media">Social Media</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="company_name" id="company_name" autocomplete="company_name"
                value="<?php echo ( ! empty( $_POST['company_name'] ) ) ? esc_attr( wp_unslash( $_POST['company_name'] ) ) : ''; ?>" placeholder="Company name" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="contact_name" id="contact_name" autocomplete="contact_name"
                value="<?php echo ( ! empty( $_POST['contact_name'] ) ) ? esc_attr( wp_unslash( $_POST['contact_name'] ) ) : ''; ?>" placeholder="Contact name" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="secondary_phone_number" id="secondary_phone_number"
                autocomplete="secondary_phone_number" value="<?php echo ( ! empty( $_POST['secondary_phone_number'] ) ) ? esc_attr( wp_unslash( $_POST['secondary_phone_number'] ) ) : ''; ?>"
                placeholder="Phone number" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="vat_number" id="vat_number" autocomplete="vat_number"
                value="<?php echo ( ! empty( $_POST['vat_number'] ) ) ? esc_attr( wp_unslash( $_POST['vat_number'] ) ) : ''; ?>" placeholder="Vat number" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="suit_number" id="suit_number" autocomplete="suit_number"
                value="<?php echo ( ! empty( $_POST['suit_number'] ) ) ? esc_attr( wp_unslash( $_POST['suit_number'] ) ) : ''; ?>" placeholder="Suit/Unit Number" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="license_number" id="license_number" autocomplete="license_number"
                value="<?php echo ( ! empty( $_POST['license_number'] ) ) ? esc_attr( wp_unslash( $_POST['license_number'] ) ) : ''; ?>" placeholder="License Number" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="license_status" id="license_status" autocomplete="license_status"
                value="<?php echo ( ! empty( $_POST['license_status'] ) ) ? esc_attr( wp_unslash( $_POST['license_status'] ) ) : ''; ?>" placeholder="License Status" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="date" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="license_expiry" id="license_expiry" autocomplete="license_expiry"
                value="<?php echo ( ! empty( $_POST['license_expiry'] ) ) ? esc_attr( wp_unslash( $_POST['license_expiry'] ) ) : ''; ?>" placeholder="License Expiry Date" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="profession" id="profession" autocomplete="profession"
                value="<?php echo ( ! empty( $_POST['profession'] ) ) ? esc_attr( wp_unslash( $_POST['profession'] ) ) : ''; ?>" placeholder="Profession" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="speciality" id="speciality" autocomplete="speciality"
                value="<?php echo ( ! empty( $_POST['speciality'] ) ) ? esc_attr( wp_unslash( $_POST['speciality'] ) ) : ''; ?>" placeholder="Speciality" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="medical_prodessional_name" id="medical_prodessional_name"
                autocomplete="medical_prodessional_name" value="<?php echo ( ! empty( $_POST['medical_prodessional_name'] ) ) ? esc_attr( wp_unslash( $_POST['medical_prodessional_name'] ) ) : ''; ?>"
                placeholder="Medical Professional Name" />
            </div>
          </div>

          <div class=" form-group row">
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="cell_no" id="cell_no" autocomplete="cell_no"
                value="<?php echo ( ! empty( $_POST['cell_no'] ) ) ? esc_attr( wp_unslash( $_POST['cell_no'] ) ) : ''; ?>" placeholder="Cell Number" />
            </div>
            <div class="col-6">
              <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="fax" id="fax" autocomplete="fax"
                value="<?php echo ( ! empty( $_POST['fax'] ) ) ? esc_attr( wp_unslash( $_POST['fax'] ) ) : ''; ?>" placeholder="Fax" />
            </div>
          </div>

        </fieldset>


        <!-- Step 4 -->
        <fieldset id="cur-step4" class="checkout-user-register-tab">
          <div class=" form-group row">
            <div class="col-12">
              <div id="terms-wrapper">
                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                  <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms_condition"
                    <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms_condition'] ) ), true ); ?> id="terms_condition" /> <span
                    class="primary-colr"><?php printf( __( 'I have read and understood the <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link span1">terms and conditions</a> set out in the agreement (including schedule "a") as found here and agree, on behalf of myself, my heirs, successors, administrators and assigns, to be bound by these terms and conditions.', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms_condition' ) ) ); ?></span>
                  <span class="required">*</span>
                </label>
                <input type="hidden" name="terms-field" value="1" />

              </div>
            </div>
          </div>
        </fieldset>

        <div class="woocommerce-form-row form-row ">
          <p>
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit reg-form-submit" name="register"
              value="<?php esc_attr_e( 'SUBMIT', 'woocommerce' ); ?>"><?php esc_html_e( 'REGISTER', 'woocommerce' ); ?></button>
          </p>
          <p class="status"></p>
          <p class="text-center align-center already-acc-btn">Already have an account? <a href="#customer_login" id="login-action-link"
              class="lato-bold-black-pearl-14px">Log-In</a></p>
        </div>
        <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
    </div>

    <div class="thanks-message text-center d-none" id="thanks-message">
      <p><i class="fa fa-ok fa-3x"></i></p>
      <h3>Thanks for your information!</h3> <span>Your information has been saved! we will contact you shortly!</p>

    </div>

    </form>
  </div>
</div>
