
require 'wrapper'

measure do
  str = '';
  for a in 0..1000000 do
  	str << 'String concatenation. '
  end
end
