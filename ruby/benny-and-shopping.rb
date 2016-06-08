test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip
end

out = []
input.each do |str|
  temp = ''
 str.each_char do |char|
  if char =='$'
    temp << char
  elsif temp.length >= 1 && ['0','1','2','3','4','5','6','7','8','9',' '].include?(char)
    if char != ' '
        if !(char == '0' && temp.length == 1)
          temp << char
        end
    end
  elsif temp.length >= 1 && !['0','1','2','3','4','5','6','7','8','9',' '].include?(char)
    break
  else
  end

 end
 temp << '0' if temp.length == 1
 out << temp
end

puts out