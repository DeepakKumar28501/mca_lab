




SELECT 2*5 FROM DUAL
SELECT SYSDATE FROM DUAL
SELECT * FROM DUAL
DESC DUAL
SELECT 2/5 FROM DUAL
SELECT 2-6 FROM DUAL
SELECT 2+6 FROM DUAL
SELECT 2-6+9-5*69/589*859-56+5896565*255-666 FROM DUAL
SELECT ABS(-85) from dual
SELECT COUNT(*) FROM DUAL;
SELECT 'ABCDEF12345' FROM DUAL;
SELECT CEIL(87),CEIL(87.3),CEIL(-87.3) from dual
SELECT FLOOR(87),FLOOR(87.3),FLOOR(-87.1) from dual
SELECT MOD(15,4),MOD(3,4) from dual
SELECT REMAINDER(15,2) from dual
SELECT POWER(2,4) from dual
SELECT COS(30) from dual
SELECT SQRT(20),SQRT(9) FROM DUAL
SELECT TRUNC(91.783,1),TRUNC(91.783,2),TRUNC(91.783,0),TRUNC(91.783,-1) FROM DUAL
SELECT TRUNC(91.783,1),TRUNC(91.783,2),TRUNC(91.783,0),TRUNC(91.783,-2) FROM DUAL
SELECT SIN(30*3.14159265359/180) FROM DUAL
SELECT LOG(10,100) FROM DUAL
SELECT LOG(10,50) FROM DUAL
SELECT LOG(10,59) FROM DUAL
SELECT ATAN(8) FROM DUAL
SELECT ATAN2(7,8) FROM DUAL
SELECT CHR(97) FROM DUAL
SELECT CHR(64) FROM DUAL
SELECT concat('ABC','DEF') FROM DUAL
SELECT INITCAP('WE ARE FROM INDIA') from dual
SELECT LOWER('WE ARE FROM INDIA') from dual
SELECT UPPER('WE ARE FROM INDIA') from dual
SELECT LPAD(first_name,15,'*') from KIIT where salary>1500;
SELECT RPAD(first_name,15,'*') from KIIT where salary>1500;
SELECT LTRIM(first_name ,'S') from KIIT where salary>1500;
SELECT RTRIM( first_name ,'S') from KIIT where salary>1500;
SELECT TRIM('S' from first_name)||TRIM('a' from first_name) from KIIT
SELECT SUBSTR('MY NAME IS LOKHNATH',12,8) from dual 
SELECT SUBSTR(first_name,5,3) from kiit
SELECT REPLACE('HELLO THERE','HELLO','HI') from dual
SELECT REPLACE(first_name,'t','HI') from kiit
SELECT ASCII('A') FROM DUAL
SELECT ASCII(First_name) FROM kiit

SELECT INSTR('GOOD MORNING','o',1,3) from Dual
SELECT INSTR('GOOD MORNING','o',-1,2) from Dual

SELECT length('GOOD MORNING') FROM DUAL
SELECT length(FIRST_NAME,last_name) FROM kiit
SELECT 2*5 FROM DUAL
SELECT SYSDATE FROM DUAL
SELECT * FROM DUAL
DESC DUAL
SELECT 2/5 FROM DUAL
SELECT 2-6 FROM DUAL
SELECT 2+6 FROM DUAL
SELECT 2-6+9-5*69/589*859-56+5896565*255-666 FROM DUAL
SELECT ABS(-85) from dual
SELECT COUNT(*) FROM DUAL;
SELECT 'ABCDEF12345' FROM DUAL;
SELECT CEIL(87),CEIL(87.3),CEIL(-87.3) from dual
SELECT FLOOR(87),FLOOR(87.3),FLOOR(-87.1) from dual
SELECT MOD(15,4),MOD(3,4) from dual
SELECT REMAINDER(15,2) from dual
SELECT POWER(2,4) from dual
SELECT COS(30) from dual
SELECT SQRT(20),SQRT(9) FROM DUAL
SELECT TRUNC(91.783,1),TRUNC(91.783,2),TRUNC(91.783,0),TRUNC(91.783,-1) FROM DUAL
SELECT TRUNC(91.783,1),TRUNC(91.783,2),TRUNC(91.783,0),TRUNC(91.783,-2) FROM DUAL
SELECT SIN(30*3.14159265359/180) FROM DUAL
SELECT LOG(10,100) FROM DUAL
SELECT LOG(10,50) FROM DUAL
SELECT LOG(10,59) FROM DUAL
SELECT ATAN(8) FROM DUAL
SELECT ATAN2(7,8) FROM DUAL
SELECT CHR(97) FROM DUAL
SELECT CHR(64) FROM DUAL
SELECT concat('ABC','DEF') FROM DUAL
SELECT INITCAP('WE ARE FROM INDIA') from dual
SELECT LOWER('WE ARE FROM INDIA') from dual
SELECT UPPER('WE ARE FROM INDIA') from dual
SELECT LPAD(first_name,15,'*') from KIIT where salary>1500;
SELECT RPAD(first_name,15,'*') from KIIT where salary>1500;
SELECT LTRIM(first_name ,'S') from KIIT where salary>1500;
SELECT RTRIM( first_name ,'S') from KIIT where salary>1500;
SELECT TRIM('S' from first_name)||TRIM('a' from first_name) from KIIT
SELECT SUBSTR('MY NAME IS LOKHNATH',12,8) from dual 
SELECT SUBSTR(first_name,5,3) from kiit
SELECT REPLACE('HELLO THERE','HELLO','HI') from dual
SELECT REPLACE(first_name,'t','HI') from kiit
SELECT ASCII('A') FROM DUAL
SELECT ASCII(First_name) FROM kiit

SELECT INSTR('GOOD MORNING','o',1,3) from Dual
SELECT INSTR('GOOD MORNING','o',-1,2) from Dual

SELECT length('GOOD MORNING') FROM DUAL
SELECT length(FIRST_NAME,last_name) FROM kiit
_____________________________________________________________________________________________________________________________________
select sysdate from dual
select current_date from dual
select systimestamp from dual
select current_timestamp from dual
select first_name,hire_date,hire_date+10 as "After 10 days of joining" from employees
select first_name,hire_date,hire_date-15 as "Before 15 days of joining" from employees
select round(sysdate-to_date('01-jan-2022')) from dual

select to_date('12-jan-1999')-to_date('15-jul-1990') from dual

select sysdate-to_date('15-jul-19') from dual
select round(sysdate-to_date('15-jul-19')) from dual
select systimestamp,(sysdate+(1/24)*12) from dual
select round(months_between(sysdate,to_date('01-dec-2023'))) from dual
select round(months_between(sysdate,to_date('09-feb-2001'))) from dual
select months_between(sysdate,'09-feb-2001') from dual
select add_months(sysdate,-10) from dual
select Next_day(sysdate,'sunday') from dual
select Next_day('09-feb-2001','monday') from dual
select Last_day(sysdate) from dual
select round(TO_Date('25-nov-22'),'YEAR') from dual
select round(TO_Date('25-nov-22'),'W') from dual
select round(TO_Date('25-nov-22'),'IW') from dual
select round(TO_Date('25-nov-22'),'HH') from dual
select round(TO_Date('25-nov-22'),'HH12') from dual
select round(TO_Date('25-nov-22'),'MI') from dual
select round(sysdate,'day') from dual
select round(sysdate,'DDD') from dual
select TRUNC(TO_DATE('03-NOV-22'),'YEAR') from DUAL
select TRUNC(TO_DATE('03-NOV-22'),'month') from DUAL
_________________________________________________________________________________________________________________-
 select * from employees where salary>4000 AND DEPARTMENT_ID=60
 select * from employees where salary>9000 OR JOB_ID='IT_PROG'
 select * from employees where JOB_ID='IT_PROG' OR (salary>5000 AND DEPARTMENT_ID=90)
SELECT * FROM EMPLOYEES where NOT(salary<12000)OR(salary>15000 AND DEPARTMENT_ID=90)
SELECT * FROM EMPLOYEES WHERE FIRST_NAME='Alex' AND SALARY=10000
SELECT * FROM EMPLOYEES WHERE DEPARTMENT_ID=10 AND SALARY>=20000
SELECT * FROM EMPLOYEES WHERE DEPARTMENT_ID=10 OR SALARY>=10000
SELECT * FROM EMPLOYEES WHERE COMMISSION_PCT IS NOT NULL
SELECT * FROM EMPLOYEES WHERE FIRST_NAME IN('Peter','David')
SELECT * FROM EMPLOYEES WHERE SALARY IN(10000,25000,35000,12000)
SELECT * FROM EMPLOYEES WHERE DEPARTMENT_ID IN(10,20,30)
SELECT * FROM EMPLOYEES WHERE DEPARTMENT_ID BETWEEN 10 AND 20 
SELECT * FROM EMPLOYEES ORDER BY EMPLOYEE_ID DESC 
SELECT * FROM EMPLOYEES WHERE FIRST_NAME LIKE '_o%'
SELECT * FROM EMPLOYEES WHERE FIRST_NAME LIKE 'N_n_%'
SELECT * FROM EMPLOYEES WHERE FIRST_NAME LIKE '%'
select distinct salary from employees
select distinct JOB_ID from employees
select avg(salary) from employees
select sum(salary) from employees
select min(salary) from employees
select max(salary) from employees
select salary,salary+100 from employees
select salary,salary*100 from employees
select salary,salary+100 as INCSALARY from employees
select STDDEV(SALARY) FROM EMPLOYEES
select FIRST_NAME||'-----'||LAST_NAME from employees
select FIRST_NAME||'--*******************************---'||LAST_NAME from employees
SELECT FIRST_NAME,COMMISSION_PCT FROM EMPLOYEES WHERE COMMISSION_PCT IS NULL

selECT COMMISSION_PCT,NVL(COMMISSION_PCT,0) from EMPLOYEES
SELECT first_name,COMMISSION_PCT,NVL(COMMISSION_PCT,0) from EMPLOYEES

SELECT last_name, salary, commission_pct,
 NVL2(commission_pct, salary, ’SAL’)
 income FROM employees;
 // above function like a ternary operation ex if first exp1 is null then return exp3 and if the first exp1 is not null then return second exp2

select EMPLOYEE_ID,FIRST_NAME||' '||LAST_NAME AS FULLNAME from employees
select EMPLOYEE_ID,FIRST_NAME||' '||LAST_NAME AS FULLNAME,max(salary) OVER() MAX_SALARY from employees 
select * from employees order by salary,DEPARTMENT_ID desc}
"above query the salary column are grouped and department coloumn are desending order|asc"
SELECT * FROM EMPLOYEES ORDER BY 3 desc;
________________________________________________________________________________________________________________
select distinct DEPARTMENT_ID from kiit
select LAST_NAME,salary,COMMISSION_PCT*SALARY AS commistion from kiit where COMMISSION_PCT=.2

select FIRST_NAME||' '||LAST_NAME,DEPARTMENT_ID,SALARY*.15 AS TA,SALARY*.32 AS HRA,SALARY*.40 AS DA ,SALARY*.15+SALARY*.40+SALARY*.32+SALARY AS GROSS_SALARY  FROM KIIT

SELECT LAST_NAME,JOB_ID FROM KIIT WHERE MANAGER_ID>0
SELECT FIRST_NAME,LAST_NAME,DEPARTMENT_ID,SALARY FROM KIIT WHERE COMMISSION_PCT>0 ORDER BY SALARY;
_________________________________________________________________________________________________________________
Convertion Functions----
 desc kiit
1. select employee_id,first_name,salary from kiit where salary>15000 // 1and 2 both are return same result
2. select employee_id,first_name,salary from kiit where salary>'15000'
3. select 12+'10' from dual // that are return answer 22 that perform mathematical operation on number and string value
4. select add_months('10-june-2022',10) from dual // add 10 month on the date return- 
  10-APR-23
****** number to character and character to number*******
TO_CHAR function is used to typecaste

5. SELECT FIRST_NAME,TO_CHAR(salary,'$99999.99') from kiit
6. SELECT FIRST_NAME,TO_CHAR(salary,'$9999,999.99') from kiit
7. SELECT FIRST_NAME,TO_CHAR(salary,'$99,99999.99') from kiit
*** TO_CHAR(date,'formate')****
8. SELECT FIRST_NAME,EMAIL,TO_CHAR(HIRE_DATE,'MM/YY') AS MONTH_HIRED FROM kiit where job_id='AD_VP'
9. SELECT FIRST_NAME,EMAIL,TO_CHAR(HIRE_DATE,'MM/YYYY') AS MONTH_HIRED FROM kiit where job_id='AD_VP'
10. SELECT FIRST_NAME,EMAIL,TO_CHAR(HIRE_DATE,'MM/YY') AS MONTH_HIRED FROM kiit where job_id='AD_VP'

// Other date formate are as 
YYYY- Full year in numbers,
YEAR- Year spelled out,
MM- Two digit Value of month
MONTH- Full name of the month
DY-- Three- letter avvreviation of the day of the WEEK
DAY-  Full name Of the Day

11. SELECT FIRST_NAME,TO_CHAR(HIRE_DATE,'fmDdspth"of" Month YYYY fmHH : MI : SS AM') AS HIREDATE FROM employees
SELECT FIRST_NAME,TO_CHAR(HIRE_DATE,'fmDdspth"of" Month YYYY HH : MI : SS AM') AS HIREDATE FROM employees
SELECT FIRST_NAME,TO_CHAR(HIRE_DATE,'fmDdspth"of" Month YYYY fmHH : MI : SS AM') AS HIREDATE FROM employees

Miscellaneous Functions
NVL(column,value)
NVL(column,notnullvalue,nullvalue)

SELECT FIRST_NAME,SALARY+NVL(COMMISsION_PCT,0) "TOTAL_SALARY" from kiit 
SELECT FIRST_NAME,NVL2(COMMISSION_PCT,'YES','NO') "TOTAL_SALARY" from kiit 
*** 
UID- Returns an integer value corresponding to the userid to the user currently logged in.
like select UID FROM DUAL
USER: Returned the current Logged USER
___________________________________________________________________________________________________________________________________________________
create table x(roll number(4),name varchar2(21),constraint x_roll_pk primary key(roll))
create table y(roll number(4),salary number(10,2),constraint y_roll_fk foreign key(roll) references x(roll))
create table xy(roll number(3) primary key)
desc x
insert into x(roll,name)values(0101,'NIKITA BANSAL')
insert into x values(0102,'NIKITA jain')
insert into x values(0103,'Harsh gupta')
insert into x values(0104,'abhi mittal')
insert into x values(0105,'lisa')

insert into y values(0101,96000)
insert into y values(0102,55000.25)
insert into y values(0103,850056.55)
insert into y values(0104,196000)
insert into y values(0105,85996.56)

select * from x,y
Q. find the name of employees who get salary 96000

select x.name from x,y where x.roll=y.roll and y.salary=96000
update x set x.name='NIKITA Sharma' where roll=0101
select  * from x
select  * from y
insert into y values(0101,85996.56)
delete from x where roll=0101  // error integrity constraint violated-child record found

on delete set null
on delete delete cascadeca

//delete table constraint
alter table y
drop constraint y_roll_fk

// all foreign key constraint in table
alter table y 
ADD constraint y_roll_fk foreign key(roll) 
references x(roll) on delete set Null


delete from x where roll=103
select * from y
desc y

alter table y drop constraint y_roll_fk

aletr table y 
ADD constraint y_roll_fk forrign key(roll)
references x(roll) ON delete cascade


insert into x values(108,'lisa')

insert into y values(108,96000)

delete from x where roll=108

select * from x
select * from y  
select * from employees where manager_id in(100,103,102,108,114,120,121)
_____________________________________

___________________________________________________________________________________________________
select distinct DEPARTMENT_ID from kiit

select LAST_NAME,salary,COMMISSION_PCT*SALARY AS commistion from kiit where COMMISSION_PCT=.2

select FIRST_NAME||' '||LAST_NAME,DEPARTMENT_ID,SALARY*.15 AS TA,SALARY*.32 AS HRA,SALARY*.40 AS DA ,SALARY*.15+SALARY*.40+SALARY*.32+SALARY AS GROSS_SALARY  FROM KIIT

SELECT LAST_NAME,JOB_ID FROM KIIT WHERE MANAGER_ID>0

SELECT FIRST_NAME,LAST_NAME,DEPARTMENT_ID,SALARY FROM KIIT WHERE COMMISSION_PCT>0 ORDER BY SALARY;

SELECT LAST_NAME,DEPARTMENT_ID FROM KIIT WHERE DEPARTMENT_ID BETWEEN 10 AND 50 ORDER BY LAST_NAME;

SELECT LAST_NAME,DEPARTMENT_ID,JOB_ID,HIRE_DATE FROM KIIT WHERE HIRE_DATE BETWEEN '20-FEB-98' AND '01-JUNE-1999' ORDER BY HIRE_DATE DESC

SELECT LAST_NAME FROM KIIT WHERE last_name LIKE '_a%'

SELECT FIRST_NAME,HIRE_DATE FROM KIIT WHERE HIRE_DATE>'01-JAN-99'

SELECT * FROM KIIT WHERE FIRST_NAME LIKE ''

SELECT LEFT('welcome', 5) AS ExtractString FROM kiit;
_______________________________________________________________________________________________________________________________________
Assignment 7


create table client_details(
client_no varchar2(6),
name varchar2(20),
place varchar2(20),
city varchar2(20),
state varchar2(20),
bal_due number(10,2)
);

create table product_detail(
product_no varchar2(6),
product_name varchar2(20),
profit_percentage number(5,2),
unit_measure varchar2(10),
qty_on_hand number(10,2),
sale_price number(10,2),
cost_price number(10,2)
)

delete from client_details
select * from client_details

insert all
into client_details values(101,'deepak knoujiya','firozabad','firozabad','up',10015.2)
into client_details values(102,'Abhishek gupta','indore','indore','mp',15515.2)
into client_details values(103,'harch jain','banglore','banglore','kerala',14515.2)
into client_details values(104,'vani bansal','kiit','balesore','odisha',17815.2)
into client_details values(105,'tanvi jain','chhata','patana','bihar',45615.2)
select * from dual

insert all
into product_detail values(101,'BOOKS',20,12,50,500,400)
into product_detail values(102,'fan',156,15,50,500,400)
into product_detail values(103,'choclate',45,40,50,500,400)
into product_detail values(104,'fruits',200,42,50,500,400)
into product_detail values(105,'medicine',210,52,50,500,400)
select * from dual

alter table client_details add pin varchar2(40)
alter table product_detail drop column profit_percentage

alter table client_details rename column pin to pincode
update client_details set pincode='203203' where client_no='101'
update client_details set pincode='203204' where client_no='102'
update client_details set pincode='203205' where client_no='103'
update client_details set pincode='20320' where client_no='104'
update client_details set pincode='203283' where client_no='105'

create table student(
stud_id varchar2(10),
stud_name varchar2(30),
address varchar2(30),
mobile_no varchar2(12),
course_name varchar2(30),
course_fee number(10,2)
)

alter table student add (sr_no number(5))

insert into student values('201','deepak kumar','ram nagar firozabad','6397367278','mca',96000,100)
insert all

into student values('202','ajaykumar','arya nagar firozabad','2873555727','bca',95000,102)
into student values('203','vijay kumar','mahaveer nagar firozabad','9719365685','mbaq',196000,103)
into student values('204','tanya jain','vibhav nagar firozabad','7830124272','b.tech',296000,104)
into student values('205','sana khan','ganesh nagar firozabad','9012215311','m.tech',396000,105)
select * from dual



insert all
into student(sr_no,stud_id,stud_name,course_name,course_fee)values(6,'206','deepak kumar','mca',96000)
into student(sr_no,stud_id,stud_name,course_name,course_fee)values(7,'207','ajaykumar','bca',95000)
into student(sr_no,stud_id,stud_name,course_name,course_fee)values(8,'208','vijay kumar','mbaq',196000)
into student(sr_no,stud_id,stud_name,course_name,course_fee)values(9,'209','tanya jain','b.tech',296000)
into student(sr_no,stud_id,stud_name,course_name,course_fee)values(10,'210','sana khan','m.tech',396000)
select * from dual

update student set mobile_no='9643169869' where mobile_no=NULL

delete from student where NOT mod(sr_no,2)=0

alter table student modify stud_id varchar2(20)

alter table student add email_id varchar2(30)

update student set email_id='kanoujiya28501@gmail.com' 

create table studentcpy(
stud_id varchar2(20),
stud_name varchar2(30),
address varchar2(30),
mobile_no varchar2(12),
course_name varchar2(30),
course_fee number(10,2),
sr_no number(5),
email_id varchar2(30)
)
 
desc student
desc studentcpy

INSERT INTO studentcpy
SELECT * FROM student

select * from studentcpy



______________________________________________________________________________________________________________________________________

// assignment 8


create table emp_personal(
emp_id varchar2(6),
emp_name varchar2(30) NOT NULL,
dob date,
doj date,
address varchar2(50) NOT NULL,
mobile_no number(12) NOT NULL check(length(mobile_no)>=10),
email_id varchar2(30),
gender varchar2(6) NOT NULL,
qualification varchar2(25) NOT NULL,
designation varchar2(25) NOT NULL,
constraint emp_personal_pk primary key(emp_id)
)

alter table emp_personal add constraint mo_ck check(length(mobile_no)>=10)

select * from user_constraints where table_name='EMP_PERSONAL'
create table x(roll number(4),name varchar2(21),constraint x_roll_pk primary key(roll))

create table y(roll number(4),salary number(10,2),constraint y_roll_fk foreign key(roll) references x(roll))



create table emp_salary(
emp_id varchar2(6) NOT NULL,
salary_date date NOT NULL,
basic number(10,2) NOT NULL,
ta number(8,2),
da number(8,2),
hra number(8,2),
pf number(8,2),
tds number(8,2),
other_deduction number(8,2),
gross number(10,2),
net number(10,2),
constraint emp_emp_id_fk foreign key(emp_id) references emp_personal(emp_id)
)

insert into emp_personal(emp_id,emp_name,dob,doj,address,mobile_no,email_id,gender,qualification,designation)values('E101','Harsh Mittal','12-jan-2022','12-jan-2000','Jain Nagar firozabad agra','9012215311','kanoujiya28501112@gmail.com','male','MCA','manager')
insert into emp_personal values('E102',' juhi','12-feb-2022','18-jan-1999','delhi','9012215311','kan1112@gmail.com','male','b.tech','tester')
insert into emp_personal values('E103',' juhi','12-feb-2022','18-jan-1999','delhi','9012215311','kan1112@gmail.com','male','b.tech','tester')
insert into emp_personal values('E104',' juhi','12-feb-2022','18-jan-1999','delhi','9012215311','kan1112@gmail.com','male','b.tech','tester')
insert into emp_personal values('E105',' tani','18-NOV-1970','18-jan-1999','AGRA','639736728','1112@gmail.com','FEMALE','b.tech','manager')
insert into emp_personal values('E106',' vani','12-JUL-1956','18-jan-1999','AMBALA','9756859685','kan1@gmail.com','FEMAIL','b.tech','boss')
insert into emp_personal values('E107',' akash gupta','12-feb-2022','18-jan-1999','DOON','9452215311','kn1112@gmail.com','male','b.tech','admin')
insert into emp_personal values('E108',' xyz','12-feb-2022','18-jan-1999','delhi','9012865311','ka1112@gmail.com','male','b.tech','tester')
insert into emp_personal values('E109',' ankush Mittal','12-feb-2022','18-jan-1999','RACHI','9912215311','kan111hh2@gmail.com','male','b.tech','crm')
insert into emp_personal values('E1010',' mayank Mittal','12-feb-2022','18-jan-1999','CHANNAI','9612215311','kan11vv12@gmail.com','male','b.tech','developer')

insert into emp_salary(emp_id,salary_date,basic)values('E101','25-dec-2022','60000');
insert into emp_salary(emp_id,salary_date,basic)values('E102','15-jan-2022','70000');
insert into emp_salary(emp_id,salary_date,basic)values('E103','05-feb-2022','60000');
insert into emp_salary(emp_id,salary_date,basic)values('E104','25-may-2022','80000');
insert into emp_salary(emp_id,salary_date,basic)values('E105','05-jul-2022','6000');
insert into emp_salary(emp_id,salary_date,basic)values('E106','25-nov-2022','15000');
insert into emp_salary(emp_id,salary_date,basic)values('E107','25-dec-2022','65500');
insert into emp_salary(emp_id,salary_date,basic)values('E108','12-sep-2022','61500');
insert into emp_salary(emp_id,salary_date,basic)values('E109','12-dec-2022','60850');
insert into emp_salary(emp_id,salary_date,basic)values('E1010','16-dec-2022','609600');
select * from emp_salary
select * from emp_personal
select * from emp_salary where emp_id='E101'

update emp_salary set ta=.35*basic,da=.75*basic,hra=.30*basic,tds=0,pf=.20*basic
update emp_salary set gross=basic+ta+da+hra
update emp_salary set net=(gross-(pf+tds+other_deduction))
update emp_salary set tds=.10*basic where gross>43000
// if any attribute value is null than mathematical opertaion not perform operation where this attributre use 
update emp_salary set other_deduction=0
_________________________________________________________________________________________________________________________________________________________________
///assignment 9

create table client_masters(
client_id varchar2(6) primary key check(client_id like 'C%'),
name varchar2(20) not null,
place varchar2(20),
city varchar2(20),
state varchar2(20),
pin varchar2(20),
bal_due number(10,2)
)
create table product_masters(
product_no varchar2(6) primary key check(product_no like 'P%'),
product_name varchar2(20) not null,
profit_pecntage number(5,2) not null,
unit_measure varchar2(10) not null,
qty_on_hand number(10,2) not null,
sale_price number(10,2) not null check(sale_price=0),
cost_price number(10,2) not null check(cost_price=0)
)

create table salesman_masters(
salesman_no varchar2(6) primary key check(salesman_no like 'S%'),
salesman_name varchar2(20) not null,
place varchar2(20),
city varchar2(20),
state varchar2(20),
pin varchar2(20),
sale_amt number(10,2) not null check(sale_amt=0),
target_amt number(10,2) not null check(target_amt=0),
yet_to_sale number(10,2) not null,
remark varchar2(60)
)

create table sale_order(
order_no varchar2(6) primary key,
client_no varchar2(6) references client_masters(client_id),
order_date date not null,
salesman_no varchar2(6) references salesman_masters(salesman_no),
delivery_type char(1) not null,
delivery_date date, 
order_status varchar2(20) not null,
check(delivery_date<order_date)
)

create table sales_order_details2(
order_no varchar2(6) references sale_order(order_no),
product_no varchar2(6) references product_masters(product_no),
quantity_ordered number(10,2),
qty_delivered number(10,2),
product_rate number(10,2)
)



ALTER TABLE client_masters
MODIFY pin varchar2(20) NOT NULL;

ALTER TABLE salesman_masters
MODIFY pin varchar2(20) NOT NULL;


alter table sales_order_details2
ADD constraint sales_or_det_pr_no_fk foreign key(product_no)
references product_masters(product_no) on delete set Null


//05/01/2023

______________________________________________________________________________________________________________________________
select  employees.first_name , departments.department_name from departments,employees
select  employees.employee_id , departments.department_id from departments,employees
select * from departments,employees

select * from   employees NATURAL JOIN departments

//retrieving record with equijoin
select employees.employee_id,employees.first_name, departments.department_id,departments.department_name from employees,departments where employees.department_id=departments.department_id
select employee_id,first_name, departments.department_id,department_name from employees,departments where employees.department_id=departments.department_id
select employee_id,first_name, departments.department_id,department_name from employees join departments on employees.department_id=departments.department_id

//Addition Search Condition Using AND Operator

select employee_id,first_name, departments.department_id,department_name from employees join departments on employees.department_id=departments.department_id and first_name='Steven'
// alias e for employees and d for departments
select employee_id,first_name, D.department_id,department_name from employees E join departments D on E.department_id=D.department_id and first_name='Steven'

drop table cosmetics
//tables of outer join
create table cosmetics(
sl_no number(3) primary key,
pname varchar2(30)
)

//Outer join Right Outer Join
create table consumables(
sl_no number(3) references cosmetics(sl_no),
cname varchar2(30)
)
insert all
into cosmetics(sl_no,pname)values(1,'Denims')
into cosmetics(sl_no,pname)values(2,'Calvin Klein')
into cosmetics(sl_no,pname)values(3,'Darphon')
into cosmetics(sl_no,pname)values(4,'Fair & lovely')
into cosmetics(sl_no,pname)values(5,'Cutex')
into cosmetics(sl_no,pname)values(6,'Clains')
select * from dual

insert all
into consumables values(3,'floor cleaner')
into consumables values(4,'biscuits')
into consumables values(5,'chakolet')
into consumables values(6,'edible oil')
select * from dual

select * from cosmetics left outer join consumables  on cosmetics.sl_no=consumables.sl_no 
select * from cosmetics, consumables where cosmetics.sl_no=consumables.sl_no(+) 

select * from cosmetics right outer join consumables  on cosmetics.sl_no=consumables.sl_no 
select * from cosmetics, consumables where cosmetics.sl_no(+)=consumables.sl_no 
//outer join
select * from cosmetics full outer join consumables  on cosmetics.sl_no=consumables.sl_no 
//joining a table to itself
select worker.first_name ||' works for '|| manager.first_name from employees worker, employees manager where worker.manager_id=manager.manager_id


//////////// assignment 4
//q1
select first_name||' '||last_name as "fullname",COMMISSION_PCT*salary as "commission Amt" from employees where first_name like '%avi%'  and COMMISSION_PCT IS NOT NULL
//q2
select 'The Employee '|| first_name ||' '|| last_name ||' Partners was hired on '|| Hire_date ||' at a salary of '||salary AS "Organization Employee Details
" from employees where commission_pct IS NOT NULL order by Hire_date;
//q3
select * from employees where manager_id in(100,103,102,108,114,120,121) and department_id not between 80 and 100 and job_id like 'ST%'
//q4
select round(months_between(sysdate,to_date(hire_date))) as "MONTH WORKED" from employees order by Hire_date
//q5
select LPAD(first_name,20,substr(last_name,1,1)) from employees
//q6
select first_name||' '||last_name as "fullname" ,(commission_pct*salary) as "old_commission_amt" ,floor(power(commission_pct,commission_pct)*salary) as "new commission_pct" from employees where commission_pct is not null
//q7
select first_name,last_name,salary from employees where commission_pct is null
//q8
select length(first_name||' '||last_name) as "total_lenth",salary,department_id from employees where department_id in(40,50)
//q9
select first_name,round((current_date-hire_date)/7) as "week works" from employees order by round((current_date-hire_date)/7) asc;
// not complete
//q10
select first_name,initcap(last_name) as "last_name",length(first_name||' '||last_name) as "name lenth" from employees where first_name like 'J%' or first_name like 'A' or first_name like 'M%' order by last_name asc;

________________________________________________________________________________________________________________________
                                assignment 5
 
select first_name,salary,commission_pct,nvl2(commision)



