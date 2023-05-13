SELECT toetsen.onderwerp, COUNT(cijfer) AS 'aantal leerlingen' 
FROM toetsen INNER JOIN cijfers
ON toetsen.id = cijfers.toets_id
GROUP BY onderwerp
HAVING COUNT('aantal leerlingen') < 10;