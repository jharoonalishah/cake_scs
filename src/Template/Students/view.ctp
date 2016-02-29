<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Student Name') ?></th>
            <td><?= h($student->student_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($student->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Father Name') ?></th>
            <td><?= h($student->father_name) ?></td>
        </tr>
        <tr>
            <th><?= __('CNIC') ?></th>
            <td><?= h($student->CNIC) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= $student->has('department') ? $this->Html->link($student->department->id, ['controller' => 'Departments', 'action' => 'view', $student->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Semester') ?></th>
            <td><?= h($student->semester) ?></td>
        </tr>
        <tr>
            <th><?= __('Emergency No') ?></th>
            <td><?= h($student->emergency_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Blood Group') ?></th>
            <td><?= h($student->blood_group) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Residence') ?></h4>
        <?= $this->Text->autoParagraph(h($student->residence)); ?>
    </div>
</div>
