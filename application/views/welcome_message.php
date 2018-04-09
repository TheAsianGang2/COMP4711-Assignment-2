<div>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sets
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        {sets}
            <li><a href="/Welcome/set/{id}"> {name}</a></li>
        {/sets}
      </ul>
        {add}
        {edit}
    </div>
    
    <div class="imgParent">
        <img class="modelImg" src="/assets/img/model.png" />
        <img class="helmImg" src="{helmId}" 
             title="
             Name: {helmName}
             Damage: {helmDmg}
             Protection: {helmProt}
             Weight: {helmWeight}"
             alt="Helmet"/>
        <img class="chestImg" src="{chestId}" 
             title="
             Name: {chestName}
             Damage: {chestDmg}
             Protection: {chestProt}
             Weight: {chestWeight}"
             alt="Chest"/>
        <img class="primaryImg" src="{primaryId}" 
             title="
             Name: {primaryName}
             Damage: {primaryDmg}
             Protection: {primaryProt}
             Weight: {primaryWeight}"
             alt="Primary"/>
        <img class="secondaryImg" src="{secondaryId}" 
             title="
             Name: {secondaryName}
             Damage: {secondaryDmg}
             Protection: {secondaryProt}
             Weight: {secondaryWeight}"
             alt="Secondary"/>
    </div>
    <div class="setDetail">
        <h2>{name}</h2>
        <h4>Damage: {damageStat}</h4>
        <h4>Protection: {protectionStat}</h4>
        <h4>Weight: {weightStat}</h4>        
    </div>
</div>