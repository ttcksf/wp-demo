<?php get_header();?>
    <main>
    <!-- 固定ページからスラッグに指定したページを作成しないと表示されない -->
        <section class="section contact">
            <div class="contact_inner inner">
                <h2 class="section_title"><span>お問い合わせ</span></h2>
                <form class="contact_form" action="#" method="POST" id="ss-form" target="hidden_iframe" onsubmit="submitted=true">
                    <dl class="contact_controls">
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <input class="form-input" type="text" name="your-name" id="your-name" value="" placeholder="お名前">
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <input class="form-input" id="your-mail" name="your-mail" type="email" value="" placeholder="メールアドレス">
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <input class="form-input" type="tel" name="your-tel" id="your-tel" value="" placeholder="電話番号">
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <input class="form-input" type="text" name="your-address" id="your-address" value="" placeholder="住所">
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <div class="select_pref">
                                    <select id="your-kind" name="your-kind" class="form-select">
                                        <option value="">ご用件</option>
                                        <option value="">パターンA</option>
                                        <option value="">パターンB</option>
                                        <option value="">パターンC</option>
                                    </select>
                                </div>
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt>
                            </dt>
                            <dd>
                                <textarea id="your-massage" name="your-massage" class="form-textarea" placeholder="本文"></textarea>
                            </dd>
                        </div>
                        <div class="contact_control">
                            <dt></dt>
                            <dd>
                                <div class="button contact_submit">
                                    <input class="contact_submit_box form-button" type="submit" value="送信">
                                </div>
                            </dd>
                        </div>
                    </dl>
                </form>
            </div>
        </section>
    </main>
<?php get_footer();?>
