Symfony
=======

A Symfony project created on January 27, 2016, 5:20 pm.
Microsoft Windows [version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation. Tous droits r�serv�s.


C:\wamp\www\Symfony>php bin/console
Symfony version 3.0.1 - app/dev/debug

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -e, --env=ENV         The Environment name. [default: "dev"]
      --no-debug        Switches off debug mode.
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output,
 2 for more verbose output and 3 for debug

Available commands:
  help                                    Displays help for a command
  list                                    Lists commands
 assets
  assets:install                          Installs bundles web assets under a pu
blic web directory
 cache
  cache:clear                             Clears the cache
  cache:warmup                            Warms up an empty cache
 config
  config:dump-reference                   Dumps the default configuration for an
 extension
 debug
  debug:config                            Dumps the current configuration for an
 extension
  debug:container                         Displays current services for an appli
cation
  debug:event-dispatcher                  Displays configured listeners for an a
pplication
  debug:router                            Displays current routes for an applica
tion
  debug:swiftmailer                       Displays current mailers for an applic
ation
  debug:translation                       Displays translation messages informat
ion
  debug:twig                              Shows a list of twig functions, filter
s, globals and tests
 doctrine
  doctrine:cache:clear-collection-region  Clear a second-level cache collection
region.
  doctrine:cache:clear-entity-region      Clear a second-level cache entity regi
on.
  doctrine:cache:clear-metadata           Clears all metadata cache for an entit
y manager
  doctrine:cache:clear-query              Clears all query cache for an entity m
anager
  doctrine:cache:clear-query-region       Clear a second-level cache query regio
n.
  doctrine:cache:clear-result             Clears result cache for an entity mana
ger
  doctrine:database:create                Creates the configured database
  doctrine:database:drop                  Drops the configured database
  doctrine:ensure-production-settings     Verify that Doctrine is properly confi
gured for a production environment.
  doctrine:generate:crud                  Generates a CRUD based on a Doctrine e
ntity
  doctrine:generate:entities              Generates entity classes and method st
ubs from your mapping information
  doctrine:generate:entity                Generates a new Doctrine entity inside
 a bundle
  doctrine:generate:form                  Generates a form type class based on a
 Doctrine entity
  doctrine:mapping:convert                Convert mapping information between su
pported formats.
  doctrine:mapping:import                 Imports mapping information from an ex
isting database
  doctrine:mapping:info
  doctrine:query:dql                      Executes arbitrary DQL directly from t
he command line.
  doctrine:query:sql                      Executes arbitrary SQL directly from t
he command line.
  doctrine:schema:create                  Executes (or dumps) the SQL needed to
generate the database schema
  doctrine:schema:drop                    Executes (or dumps) the SQL needed to
drop the current database schema
  doctrine:schema:update                  Executes (or dumps) the SQL needed to
update the database schema to match the current mapping metadata.
  doctrine:schema:validate                Validate the mapping files.
 generate
  generate:bundle                         Generates a bundle
  generate:command                        Generates a console command
  generate:controller                     Generates a controller
  generate:doctrine:crud                  Generates a CRUD based on a Doctrine e
ntity
  generate:doctrine:entities              Generates entity classes and method st
ubs from your mapping information
  generate:doctrine:entity                Generates a new Doctrine entity inside
 a bundle
  generate:doctrine:form                  Generates a form type class based on a
 Doctrine entity
 lint
  lint:twig                               Lints a template and outputs encounter
ed errors
  lint:yaml                               Lints a file and outputs encountered e
rrors
 orm
  orm:convert:mapping                     Convert mapping information between su
pported formats.
 router
  router:match                            Helps debug routes by simulating a pat
h info match
 security
  security:check                          Checks security issues in your project
 dependencies
  security:encode-password                Encodes a password.
 server
  server:run                              Runs PHP built-in web server
  server:start                            Starts PHP built-in web server in the
background
  server:status                           Outputs the status of the built-in web
 server for the given address
  server:stop                             Stops PHP's built-in web server that w
as started with the server:start command
 swiftmailer
  swiftmailer:debug                       Displays current mailers for an applic
ation
  swiftmailer:email:send                  Send simple email message
  swiftmailer:spool:send                  Sends emails from the spool
 translation
  translation:update                      Updates the translation file

C:\wamp\www\Symfony>



####### Pour cr�er un bundle ce qu'il faut retenir:

Dans le r�pertoire du projet ex: C:\wamp\www\Symfony> php bin/console generate:bundle

####### Nettoyer le cache :

var/cache/dev ou var/cache/prod  (manuellement)       php app/console cache:clear (console)

####### Controlleur ########

			Afficher une r�ponse :

Classe � utiliser => use Symfony\Component\HttpFoundation\Response;
 
Requ�te =>  return new Response();


			Afficher une vue :

Classe � utiliser => use Symfony\Component\HttpFoundation\Response;

Requ�te1 => return $this->get('templating')

		       ->renderResponse('<nameBundle><:controller:nameview>',

		 array('<param>' => '<value>')
	    );

Requ�te2 => return $this->render(
		'<nameBundle><:controller:nameview>',

		 array('<param>' => '<value>')
             );
	

			R�cup�rer un GET :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te =>  $get = $request->query->get('<tag>');

			R�cup�rer un POST :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te => $post = $request->request->get('<tag>');

			R�cup�rer un COOKIE :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te => $cookie = $request->cookies->get('<tag>');

			R�cup�rer une VARIABLE SERVEUR :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te => $server = $request->server->get('REQUEST_URI');

			R�cup�rer une variable d'ent�te :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te => $header = $request->headers->get('USER_AGENT');

			R�cup�rer un param�tre de ROUTE :

Classe � utiliser => use Symfony\Component\HttpFoundation\Request;
 
Param�tre appel => Request $request

Requ�te => $route = $request->attributes->get('id');

			R�cup�rer la m�thode de la requ�te HTTP :

Requ�te => $request->isMethod('POST') ## M�thode POST ?

	   $request->isXmlHttpRequest() ## requ�te AJAX ?

http://api.symfony.com/2.7/Symfony/Component/HttpFoundation/Request.html

			Faire une redirection :

Classe � utiliser => use Symfony\Component\HttpFoundation\RedirectResponse;

Requ�te1 => $url = $this->get('router')->generate('<nom_de_la_route>');

	    return new RedirectResponse($url);

Requ�te2 => return $this->redirectToRoute('<nom_de_la_route>');


			Changer le Content-Type de la r�ponse :

Classe � utiliser => use Symfony\Component\HttpFoundation\Response;

Requ�te1 => $response = new Response(json_encode(array('id' => $id)));

	   $response->headers->set('Content-Type', 'application/json');

	   return $response;

Classe � utiliser => use Symfony\Component\HttpFoundation\JsonResponse;

Requ�te2 => return new JsonResponse(array('id' => $id));