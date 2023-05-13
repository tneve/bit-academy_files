SELECT toetsen.onderwerp, COUNT(cijfer) 
FROM toetsen INNER JOIN cijfers
ON toetsen.id = cijfers.toets_id 
GROUP BY onderwerp;