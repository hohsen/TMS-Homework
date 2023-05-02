<!-- 
    
Допустим, вы разрабатываете систему управления данными компании, которая имеет несколько отделов: 
отдел продаж, 
отдел разработки, 
отдел маркетинга и т.д. 
Каждый отдел имеет своих сотрудников, которые имеют различные роли и доступы к разным частям системы.

Для этого вы можете создать следующие классы:



Класс "Employee" (Сотрудник) с следующими свойствами:

$name - имя сотрудника
$email - адрес электронной почты сотрудника
$password - пароль для входа в систему
$department - отдел, в котором работает сотрудник
$role - роль сотрудника (администратор, менеджер, обычный пользователь и т.д.)

Класс "Employee" должен иметь следующие методы:

__construct($name, $email, $password, $department, $role) - конструктор класса, 
который принимает все свойства сотрудника в качестве аргументов и устанавливает их соответствующим образом

getName() - возвращает имя сотрудника
getEmail() - возвращает адрес электронной почты сотрудника
getPassword() - возвращает пароль сотрудника
getDepartment() - возвращает отдел, в котором работает сотрудник
getRole() - возвращает роль сотрудника



Класс "Department" (Отдел) с следующими свойствами:

$name - название отдела

Класс "Department" должен иметь следующие методы:

__construct($name) - конструктор класса, который принимает идентификатор и название отдела в 
качестве аргументов и устанавливает их соответствующим образом

getName() - возвращает название отдела



Класс "Permission" (Разрешение) с следующими свойствами:

$name - название разрешения

Класс "Permission" должен иметь следующие методы:

__construct($id, $name) - конструктор класса, который принимает идентификатор и название разрешения в 
качестве аргументов и устанавливает их соответствующим образом

getId() - возвращает идентификатор разрешения
getName() - возвращает название разрешения



Класс "Role" (Роль) с следующими свойствами:

$name - название роли
$permissions - массив объектов класса "Permission", которые имеются у данной роли

Класс "Role" должен иметь следующие методы:

__construct($name) - конструктор класса, который принимает идентификатор и название роли в 
качестве аргументов и устанавливает их соответствующим образом

getName() - возвращает название роли
getPermissions() - возвращает массив объектов класса "Permission", которые имеются у данной роли
addPermission($permission) - добавляет объект класса "Permission" в массив $permissions
removePermission($permission) - удаляет объект класса "Permission" из массива $permissions



Класс "AccessControl" (Управление доступом) с следующими свойствами:

$roles - массив объектов класса "Role", которые имеются в системе
$permissions - массив объектов класса "Permission", которые имеются в системе

Класс "AccessControl" должен иметь следующие методы:

__construct($roles, $permissions) - конструктор класса, 
который принимает массив объектов класса "Role" и массив объектов класса "Permission" в 
качестве аргументов и устанавливает их соответствующим образом 

checkAccess($employee, $permission) - проверяет, имеет ли сотрудник $employee доступ к 
разрешению $permission. 
Метод должен вернуть true, если сотрудник имеет доступ, и false в противном случае.  

-->

<?php

class Employee{

    private string $name;
    private string $email;
    private string $password;
    private Department $department;
    private Role $role;


    public function __construct(string $name, string $email, string $password, 
                                Department $department, Role $role
    ){
        $this->name =$name;
        $this->email =$email;
        $this->password =$password;
        $this->department =$department;
        $this->role =$role;
    }


    public function setName(string $name){
        $this->name = $name;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function setDepartment(string $department){
        $this->department = $department;
    }
    public function setRole(string $role){
        $this->role = $role;
    }
    

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getDepartment(){
        return $this->department;
    }
    public function getRole(){
        return $this->role;
    }
}



class Department{

    private string $name;


    public function __construct(string $name){
        $this->name = $name;
    }


    public function setName(string $name){
        $this->name = $name;
    }


    public function getName(){
        return $this->name;
    }
}



class Permission{

    private string $id;
    private string $name;


    public function __construct(string $id, string $name){
        $this->id = $id;
        $this->name = $name;
    }


    public function setID(string $id){
        $this->id = $id;
    }
    public function setName(string $name){
        $this->name = $name;
    }


    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
}



class Role{

    private string $name;
    private array $permissions;


    public function __construct(string $name, array $permissions){
        $this->name = $name;
        $this->permissions = $permissions;
    }


    public function setName(string $name){
        $this->name = $name;
    }
    public function setPermissions(array $permissions){
        $this->permissions = $permissions;
    }


    public function getName(){
        return $this->name;
    }
    public function getPermissions(){
        return $this->permissions;
    }


    public function addPermission(Permission $permission){
        $this->permissions[] = $permission;
    }


    public function removePermission(Permission $permission){
        if(array_search($permission, $this->permissions)){
            unset($permission);
        }
    }

}



class AccessControl{

    private array $roles;
    private array $permissions;

    public function __construct(array $roles, array $permissions){
        $this->roles = $roles;
        $this->permissions = $permissions;
    }


    public function setRoles(array $roles){
        $this->roles = $roles;
    }
    public function setPermissions(array $permissions){
        $this->permissions = $permissions;
    }


    public function getRoles(){
        return $this->roles;
    }
    public function getPermissions(){
        return $this->permissions;
    }

    
    public function checkAccess(Employee $employee, Permission $permission){
        foreach($employee->getRole()->getPermissions() as $rolePermission){
            if($rolePermission->getId() == $permission->getId()){
                return true;
            }
        }
        return false;
    }

}

$departmentSales = new Department('Sales');

$permissionManager1 = new Permission('M1', 'Make schedule');
$permissionManager2 = new Permission('M2', 'Change schedule');
$permissionDirector1 = new Permission('D1', 'Change schedule');

$roleManager = new Role('Manager', [$permissionManager1, $permissionManager2]);

$employee1 = new Employee('Pjotr', 'pjotr@gmail.com', 'asdasd55', $departmentSales, $roleManager);

$accessControl = new AccessControl([$roleManager], [$permissionManager1, $permissionManager2]);

echo $accessControl->checkAccess($employee1, $permissionManager2) ? 'true' : 'false';


?>







