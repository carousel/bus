*   Find better way to inject handler into command. Right now command is dependent on handler. It is ok for now, since command and handler are usually coupled but separation is the goal.
*   Let bus connect command and handler. Now command is coupled with handler.
*   Extract information about classes, methods, handlers using regexp, classname, reflection ...
*   refactor to cover more powerful dispatching 
