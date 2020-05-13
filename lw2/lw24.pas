PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Query, NeededString: STRING;
  Position: INTEGER;
BEGIN
  NeededString := '';
  Query := GetEnv('QUERY_STRING');
  Position := POS(Key + '=', Query);
  IF (Position <> 0)
  THEN
    BEGIN
      Position := Position + Length(Key) + 1;
      WHILE ((Query[Position] <> '&') AND (Position <= Length(Query)))
      DO
        BEGIN
          NeededString := NeededString + Query[Position];
          Position := Position + 1
        END;
      GetQueryStringParameter := NeededString
    END
  ELSE
    GetQueryStringParameter := 'not found'
END;

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
