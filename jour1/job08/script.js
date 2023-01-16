/* Créez une fonction “sommenombrespremiers” qui prend en paramètres deux variables.
Si ces deux variables sont des nombres premiers, alors la fonction retourne leur
somme. Sinon, la fonction retourne false. */

// Créer en premer lieu une fonction qui permet de vérifier si un nombre est premier ou non
function estpremier(nombre)
{
    if (nombre < 2){
        return false;
    } 
    for (let i = 2; i < nombre; i++){
        if (nombre % i === 0){
            return false;
        }
        return true;
    }
}
function sommesnombrespremiers(n,m)
{
    if (estpremier(n) && estpremier(m)){
        return n + m;
    } else {
        return false;
    }
}
console.log(estpremier(2))
console.log(estpremier(3))
console.log(sommesnombrespremiers(2,3));