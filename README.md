# School Management System

## Introduction

Welcome to the School Management System (SMS). This system is designed to streamline and manage various aspects of school operations, including student and trainer information, module management, assessments, and salary tracking. It provides a user-friendly interface and robust functionalities to support efficient administrative tasks and data management.

## Features

### User Management
- **Users**: Manage and track all users within the system. Includes functionality for adding, updating, and deleting user records.

### Trainee Management
- **Trainees**: Add, update, and manage trainee details. Includes tracking of trainee IDs, names, phone numbers, and salaries.
- **Assignments**: Manage and assign modules to trainees.

### Trainer Management
- **Trainers**: Manage trainer information, including IDs, names, phone numbers, and assigned trades.
- **Assignments**: Track and assign trainers to specific trades or modules.

### Module Management
- **Modules**: Manage module details including codes, names, and associated trades.
- **Assignments**: Assign modules to trainees or trainers.

### Assessment Management
- **Assessments**: Create, track, and manage assessments for trainees. Includes tracking scores and progress.

### Salary Management
- **Salaries**: Manage salary records for trainees and trainers. Includes functionality for adding, updating, and viewing salary details.

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache or Nginx web server

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/jeanaimeiraguha/SCHOOL_MANAGEMENT_SYSTEM.git







   
### This iz DFD LEVEL 0


                +----------------------+
                |                      |
                |      School           |
                |   Management System   |
                |                      |
                +--------+-------------+
                         |
        +----------------+-------------------+
        |                |                   |
    +---+---+        +---+---+           +---+---+
    |  Admin  |        | Trainees |           | Trainers |
    +--------+        +--------+           +--------+









## This is DFD LEVEL 1











                        +--------------------------+
                        |                          |
                        |  School Management System|
                        |                          |
                        +----------+---------------+
                                   |
         +-------------------------+--------------------------+
         |                         |                          |
   +-----+-----+             +-----+-----+             +------+-+------+
   | User Mgmt |             | Trainee   |             | Trainer Mgmt |
   | Process   |             | Management|             | Process      |
   +-----+-----+             +-----+-----+             +------+-+------+
         |                         |                          |
         |                         |                          |
         |                         |                          |
         v                         v                          v
 +-------+---------+       +-------+---------+       +--------+---------+
 | User Database   |       | Trainee Database|       | Trainer Database |
 +-----------------+       +-----------------+       +------------------+
                                    |
                                    |
                                    v


                                    
                            +-------+--------+
                            |   Module Mgmt  |
                            |    Process     |
                            +-------+--------+
                                    |
                                    v


                                    
                            +-------+--------+
                            |  Module Database|
                            +-----------------+
                                    |
                                    v



                                    
                            +-------+--------+
                            | Assessment Mgmt|
                            |    Process     |
                            +-------+--------+
                                    |
                                    v




                                    
                            +-------+--------+
                            |Assessment Database|
                            +------------------+
                                    |
                                    v



                                    
                            +-------+--------+
                            | Salary Mgmt    |
                            |   Process      |
                            +-----------------+
                                    |
                                    v
                            +-------+--------+
                            | Salary Database|
                            +-----------------+
