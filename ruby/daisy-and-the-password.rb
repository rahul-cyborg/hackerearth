test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split(' ')
end

out = []

input.each do |arr|
  str = arr[0]
  find = arr[1]
  temp = str + str
  find.sub! str,'' 
  if find == str 
    out << "Possible"
  else
    val = temp.include? find
    if (find.length == str.length) && val
       out << "Possible"
    else
      out << "Impossible"
    end
  end
end

puts out

