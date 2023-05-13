SELECT AVG(cijfer) FROM cijfers WHERE toets_id = 1;

SELECT cijfer FROM cijfers 
WHERE toets_id = 1 ORDER BY cijfer ASC LIMIT 1;

SELECT cijfer FROM cijfers 
WHERE toets_id = 1 ORDER BY cijfer DESC LIMIT 1;
