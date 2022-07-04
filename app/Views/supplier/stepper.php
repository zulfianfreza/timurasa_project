<!-- <div class="row justify-content-center mb-sm-4 mb-1">
    <div class="col">
        <ul class="step-wizard-list">
            <li class="step-wizard-item <?= $step == 'one' ? 'current-item' : '' ?>">
                <a href="">

                    <span class="progress-count">1</span>
                </a>
            </li>
            <li class="step-wizard-item <?= $step == 'two' ? 'current-item' : '' ?>">
                <span class="progress-count">2</span>
            </li>
            <li class="step-wizard-item <?= $step == 'three' ? 'current-item' : '' ?>">
                <span class="progress-count">3</span>
            </li>
            <li class="step-wizard-item <?= $step == 'for' ? 'current-item' : '' ?>">
                <span class="progress-count">4</span>
            </li>
            <li class="step-wizard-item  <?= $step == 'five' ? 'current-item' : '' ?>">
                <span class="progress-count">5</span>
            </li>
        </ul>
    </div>
</div> -->

<div class="px-5 py-3 mb-sm-5 mb-5 ">
    <div class="position-relative m-4">
        <div class="progress" style="height: 3px;">
            <div class="progress-bar tr-bg-primary" role="progressbar" style="width: <?= $step == 'one' ? '0%' : ($step == 'two' ? '25%' : ($step == 'three' ? '50%' : ($step == 'for' ? '75%' : '100%'))) ?>;" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <a href="<?= base_url('supplier/add') ?>">
            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm text-white tr-bg-primary border-0 rounded-pill" style="width: 2.5rem; height:2.5rem; left:0%;">1</button>
        </a>
        <a href="<?= base_url('supplier/add/step_two') ?>">
            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill <?= $step == 'two' || $step == 'three' || $step == 'for' || $step == 'five' ? 'text-white tr-bg-primary' : 'btn-secondary' ?>" style="width: 2.5rem; height:2.5rem; left:25%;">2</button>
        </a>
        <a href="<?= base_url('supplier/add/step_three') ?>">
            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill <?= $step == 'three' || $step == 'for' || $step == 'five' ? 'text-white tr-bg-primary' : 'btn-secondary' ?>" style="width: 2.5rem; height:2.5rem; left:50%;">3</button>
        </a>
        <a href="<?= base_url('supplier/add/step_for') ?>">
            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill <?= $step == 'for' || $step == 'five' ? 'text-white tr-bg-primary' : 'btn-secondary' ?>" style="width: 2.5rem; height:2.5rem; left:75%;">4</button>
        </a>
        <a href="<?= base_url('supplier/add/step_five') ?>">
            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill <?= $step == 'five' ? 'text-white tr-bg-primary' : 'btn-secondary' ?>" style="width: 2.5rem; height:2.5rem; left:100%;">5</button>
        </a>
    </div>
</div>