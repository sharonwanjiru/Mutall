SELECT 
  day,name,initials,university,qualification,year,image,portfolio
FROM 
  intern
ORDER BY
  CASE day
    WHEN 'Monday' THEN 1
    WHEN 'Tuesday' THEN 2
    WHEN 'Wednesday' THEN 3
    WHEN 'Thursday' THEN 4
    WHEN 'Friday' THEN 5
  END;


SELECT 
  day, 
GROUP_CONCAT(CONCAT('{' , name, ',' ,initials, ',', university, ',', qualification,',', year,',', image,',', portfolio ,'}') SEPARATOR '; ')
   AS group_info
FROM 
  intern
GROUP BY
  day
ORDER BY
  CASE day
    WHEN 'Monday' THEN 1
    WHEN 'Tuesday' THEN 2
    WHEN 'Wednesday' THEN 3
    WHEN 'Thursday' THEN 4
    WHEN 'Friday' THEN 5
  END;
