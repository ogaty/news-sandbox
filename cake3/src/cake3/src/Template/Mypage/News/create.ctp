    <h1>News</h1>

    <section>
        <div>
            <form method="post" action="/mypage/news/store" enctype="multipart/form-data">
                <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
                <div>
                    <label>
                        タイトル:<br>
                        <input type="text" name="title"><br>
                    </label>
                </div>
                <div>
                    <label>
                        本文:<br>
                        <textarea name="body" id="body" style=""></textarea><br>
                    </label>
                    <div id="editor">

                    </div>
                </div>
                <div>
                    <label>
                        media:<br>
                        <input type="file" name="media"><br>
                    </label>
                </div>
                <div>
                    <input type="submit" id="submit" value="送信">
                </div>
            </form>
        </div>
    </section>
