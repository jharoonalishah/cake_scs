<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity.
 *
 * @property int $id
 * @property string $student_name
 * @property string $gender
 * @property string $father_name
 * @property string $CNIC
 * @property int $department_id
 * @property \App\Model\Entity\Department $department
 * @property string $semester
 * @property string $emergency_no
 * @property string $blood_group
 * @property string $residence
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

}
