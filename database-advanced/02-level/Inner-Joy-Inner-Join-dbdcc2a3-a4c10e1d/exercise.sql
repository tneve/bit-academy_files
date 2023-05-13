SELECT vakken.vak, docenten.naam, docenten.telefoon FROM
vakken INNER JOIN docenten
ON vakken.docent_id = docenten.id; 