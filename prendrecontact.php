<?php
require('header.php')
?>


<div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
    <!-- texte d' invite -->
    <div class = "w-60 flex flex-col h-auto justify-around">
         <h1 class="font-bold text-slate-900 text-4xl "> Créez votre compte ici!  </h1>
         <p class="font-bold text-black text-base ">Entrez vos identifiants pour créer votre compte.</p>
    </div>
      <!-- Formulaire d'insciption et de connection  -->
    <form class = "flex" method="POST" >
        
          <label class="  " for="nom">Nom d'utilisateur</label>
          <input class=" " type="text" name="nom" placeholder="Nom..." id="name">
          <label class=" " for="nom">Email</label>
          <input class=" " type="mail" name="email" placeholder="xx@gmail.com..." id="mail">
          <label class=""  for="psw">Mot de passe</label>
          <input class=" " type="password" name="motDePasse"  placeholder="Mot de passe " id="password" autocomplete>
         

          <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " name="inscription" >Inscription</button>
        
    </form> 





<?php
require('footer.php')
?>