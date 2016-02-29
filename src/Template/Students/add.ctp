<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php
            echo $this->Form->input('student_name');
            echo $this->Form->input('gender');
            echo $this->Form->input('father_name');
            echo $this->Form->input('CNIC');
            echo $this->Form->input('department_id', [
                                        'type' => 'select',
                                        'options' => $departments,
                                        'multiple' => false,
                                        'empty' => true
                                      ]);
            echo $this->Form->input('semester');
            echo $this->Form->input('emergency_no');
            echo $this->Form->input('blood_group');
            echo $this->Form->input('residence');
            echo $this->Form->input('image', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
