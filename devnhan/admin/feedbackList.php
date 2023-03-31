<?php
include_once __DIR__ . '/../classes/feedback.php';
$feedback = new feedback();
$showFeedback = $feedback->list_Feedback();
?>
<div data-id="feedback-list" class="container__body__content feedback-list tab-content">
    <div class="container__body__content__title">
        <p class="container__body__content__title__p">
            Feedback list
        </p>
    </div>
    <div class='container__body__content__content'>
        <table>
            <thead>
                <tr>
                    <th class="cate-th">ID</th>
                    <th class="cate-th">EmailUser</th>
                    <th class="cate-th">Nội dung góp ý</th>
                    <th class="cate-th">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!$showFeedback) {
                    echo "<h3 class=' bg-warning p-2 rounded mb-3'>Chưa ai góp ý!</h3>";
                } else
                    foreach ($showFeedback as $Item) {
                ?>
                    <tr class="feedback">
                        <td class="feed-id cate-td">
                            <?php
                            echo $Item['feedId'];
                            ?>
                        </td>
                        <td class="cate-td">
                            <?php
                            echo $Item['feedEmail'];
                            ?>
                        </td>
                        <td class="cate-td">
                            <?php
                            echo $Item['feedContent'];
                            ?>
                        </td>
                        <td class="cate-td">
                            <button class="btn btn-danger btn-del-feedback">Delete</button>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>