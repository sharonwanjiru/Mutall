with
    interns as (
        select 
            day,
            CASE day
                WHEN 'Monday' THEN 1
                WHEN 'Tuesday' THEN 2
                WHEN 'Wednesday' THEN 3
                WHEN 'Thursday' THEN 4
                WHEN 'Friday' THEN 5
             END as code,
            name,
            initials,
            image,
            portfolio,
            qualification,
            year,
            university 
        from intern order by code
    ),
    compacted as (
            select day, code, json_object(
            'name', name,'initials', initials,'qualification', 
            qualification,'university', university,'year', year,'image', image, 
            'portfolio',portfolio
        ) as data from interns
    )
select day, json_arrayagg(data) as data from compacted group by day  order by code  
    