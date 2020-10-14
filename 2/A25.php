<?php
/* Name: Chang hong xiang
  ID:602110200
  Wechat name:Chang
  */
     printf("input size: ");
     fscanf(STDIN,"%d",$n);
     for($a=0;$a<$n;$a++) {
     for($b=0;$b<$n;$b++) {
        if($a==$n-1||$a==0||$b==0||$b==$n-1) printf("*"); 
        else  printf(" ");}
     printf("\n");
        } 
    