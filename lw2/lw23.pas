PROGRAM SarahRevere(INPUT, OUTPUT);
USES Dos;
VAR
  InputString, InputName: STRING;
  Count: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  InputString := GetEnv('QUERY_STRING');
  IF POS('name=', InputString) = 1
  THEN
    BEGIN
      IF POS('&', InputString) > 0
      THEN
        Count := INTEGER(POS('&', InputString)) - 6
      ELSE
        Count := LENGTH(InputString) - 5;
      InputName := COPY(InputString, 6, Count);
      WRITELN('Hello, dear ', InputName, '!')
    END
  ELSE
    WRITELN('HELLO ANONYMUS')
END.
