<?= $this->extend('templates/app') ?>

<?= $this->section('content') ?>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <!--                <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72"-->
                <!--                     height="57">-->
                <h2>التفقيط</h2>
                <p class="lead"> تحويل الأعداد المكتوبة رقماً إلى أعداد مكتوبة نصاً باللغتين العربية والإنجليزية
                </p>
            </div>
            <!--        start Tafiqt section-->
            <section>
                <div class="card">
                    <div class="text-center card-body">
                        <label for="txt" class="form-label">أدخل العدد</label>
                        <input dir="rtl" type="number" step="1" class="form-control" id="txt"
                               placeholder=""
                               min="-999999999" max="999999999" required>
                        <br>
                        <input class="w-35 btn btn-primary btn-sm" type="button" id="submit" onclick="main()"
                               value="تفقيط"/>
                        <br>
                        <h3 id="arabicText"></h3>
                        <br>
                        <div class="card text-center">
                            <div class="">
                                <textarea class="form-control" id="arabicTextInput">
                                </textarea>
                                <br>
                                <input class="w-35 btn btn-primary btn-sm" value="نسخ النص" type="button"
                                       onclick="copyArabic()"

                            </div>
                        </div>
                    </div>
                </div>

                <!--        end Tadqit section-->
            </section>
            <br>
            <!--        about section-->
            <section>
                <div class="card">
                    <div class="card-header">
                        <p>تفقيط</p>
                    </div>
                    <div class="card-body">
                        <div class="info-box text-justify"><h2>تفقيط</h2>
                            <p> هي عملية كتابة الأعداد نصاً بالكلمات بدلاً من الأرقام، وفائدة هذه العملية هو منع التلاعب
                                بالارقام ودائماً ما يصاحب عملية التفقيط عبارة "فقط لا غير" لكي تقطع الطريق على أي عملية
                                تلاعب بالارقام،
                                فمن السهل تزوير العدد 1000 دولار المكتوب رقماً باضافة صفر الى يمين الرقم فيصبح 10000
                                دولار،
                                اما في التفقيط نكتب "ألف دولاراً فقط لاغير" وهنا لا يمكن لشخص التلاعب في العدد لأنه ليس
                                أرقام فحسب بل نص مكتوب بالحروف.<br><br>ويبرز استخدام التفقيط في كتابة المستندات المالية
                                والشيكات والكمبيالات وغيرها من المعاملات المالية الحساسة، فيضاف إلى جانب العدد المكتوب
                                رقماً
                                عدد آخر مكتوب بالحروف، فوجود العدد مرتين على المعاملة يعطي نوع من التأكيد بالإضافة إلى
                                منع
                                التزوير، لأن أي تغيير أو خطأ في محتوى هذه المعاملات قد يكلف الكثير.</p>
                            <p>وقد يصف البعض عملية التفقيط بعبارات اخرى ومنها:</p>
                            <ul>
                                <li>كتابة الارقام بالحروف العربية</li>
                                <li>كتابة الاعداد بالحروف</li>
                                <li>تحويل الارقام الى حروف</li>
                                <li>تحويل الارقام الى كتابة</li>
                                <li>تحويل الارقام الى كلمات</li>
                                <li>تحويل الاعداد الى كلمات</li>
                                <li>الارقام العربية كتابة</li>
                                <li>الارقام العربية بالحروف</li>
                                <li>كتابة الارقام بالعربي</li>
                                <li>كيفية كتابة المبالغ المالية بالحروف</li>
                                <li>برنامج تحويل الارقام الى حروف باللغة العربية</li>
                                <li>كتابة الاعداد باللغة العربية الفصحى</li>
                            </ul>
                            <p>لكن يفضل أن نقول تحويل الأعداد المكتوبة بالأرقام الى أعداد مكتوبة بالكلمات سواء باللغة
                                العربية أو اللغة الإنجليزية.</p>
                            <h2>تفقيط الأموال والعملات</h2>
                            <p>يتمحور عمل التفقيط في الغالب بامور تتعلق بالمال واسواق المال والفوركس، فمثلاً عند القيام
                                بمعاملة مالية مثل معاملات تحويل الأموال من دولار أمريكي إلى يورو اوروبي أو أي عملة
                                عالمية
                                اخرى فانه يتم ذكر القيمة بالكلمات مع اسم العملة بالاضافة إلى كلمة فقط لا غير، وهنا عند
                                تفقيط
                                سعر الدولار إلى سعر اليورو لمبلغ 1580 دولار.</p>
                            <p>المثال: ألف وخمسمائة وثمانون دولار فقط لا غير تعادل ألف وثلاثمائة وخمسة وثمانون يورو
                                وثلاثون
                                سنتاً فقط لا غير، وكما هو واضح أنه من خلال معرفة اسعار العملات اليوم تم تحويل العملات
                                بين
                                الدولار واليورو عن طريق التوثيق النصي الغير قابل للتزوير، ولذلك فان محول العملات يجب
                                يعتمد
                                هذه الطريقة في التوثيق دائماً.</p>
                            <h2>الارقام العربية</h2>
                            <p>تكتب رموز الأرقام العربية هكذا مرتبة تصاعدياً ٠ و ١ و ٢ و ٣ و ٤ و ٥ و ٦ و ٧ و ٨ وأخير ٩
                                وهذه
                                تسمى الأرقام العربية المشرقية واما الأرقام التي تكون باللغة الإنجليزية فهي&nbsp; تسمى
                                الأرقام العربية المغربية ومن خلال هذه الأرقام يمكن تشكيل اعداد الى ما لا نهاية بشكل سهل
                                عكس
                                الأرقام الرومانية التي كانت تشكل صعوبة بالغة في تشكيل العمليات الحسابية وكتابة الأعداد
                                الكبيرة نوعاً ما، وانتقلت هذه الأرقام الى اوروبا كبديل عن الأرقام الرومانية، ويمكن تصفح
                                الأرقام بالعربية من واحد حتى الملاين أو المليارات من خلال صفحة الأرقام بالعربية والتي
                                تظهر
                                الأعداد على شكل جدول مرتب تصاعدياً.</p>
                            <p></p></div>
                    </div>
                </div>

            </section>
            <!--       end about section-->

            <br>

            <hr>
            <!--        share section-->
            <section>
                <div class="card text-center"><p>انشر الخدمة للأصدقاء عبر مواقع التواصل الإجتماعي</p>
                    <div class=" flex-row flex-row-center"><a
                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                target="blank"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="facebook" class="socialicon socialicon-facebook"></a><a
                                href="fb-messenger://share/?link=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar&amp;app_id=394268510998339"
                                target="blank" class="sc-show mc-show lc-hide"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="whatsapp" class="socialicon socialicon-fb-messenger"></a><a
                                href="https://www.facebook.com/dialog/send?link=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar&amp;redirect_uri=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar&amp;app_id=394268510998339"
                                target="blank" class="sc-hide mc-hide lc-show"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="whatsapp" class="socialicon socialicon-fb-messenger"></a><a
                                href="https://twitter.com/intent/tweet?text=تفقيط: تحويل الأرقام إلى كلمات&amp;url=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                target="blank"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="twitter" class="socialicon socialicon-twitter"></a><a
                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                target="blank"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="linkedin" class="socialicon socialicon-linkedin"></a><a
                                href="whatsapp://send?text=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                data-action="share/whatsapp/share" target="blank" class="sc-show mc-show lc-hide"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="whatsapp" class="socialicon socialicon-whatsapp"></a><a
                                href="https://web.whatsapp.com/send?text=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                target="blank" class="sc-hide mc-hide lc-show"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="whatsapp" class="socialicon socialicon-whatsapp"></a><a
                                href="https://t.me/share/url?url=https%3A%2F%2Fnumbers.un-web.com%2F%3Fl%3Dar"
                                target="blank" class="sc-show mc-show lc-hide"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKAQMAAAC3/F3+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjwAsAAB4AAdpxxYoAAAAASUVORK5CYII="
                                    alt="whatsapp" class="socialicon socialicon-telegram"></a></div>
                </div>
            </section>
            <!--        end share section-->
        </main>
    </div>
    <script>
        function main() {
            tafqitRun();
        }


    </script>
<?= $this->endSection() ?>